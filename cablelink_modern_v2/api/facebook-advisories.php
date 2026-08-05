<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('X-Content-Type-Options: nosniff');

const CONFIG_FILE = __DIR__ . '/facebook.config.php';
const CACHE_FILE = __DIR__ . '/cache/facebook-advisories.json';

function respond(int $status, array $payload): void
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

function clean_text(string $text): string
{
    $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = preg_replace('/[ \t]+/u', ' ', $text) ?? $text;
    $text = preg_replace('/\r\n?|\n/u', "\n", $text) ?? $text;
    return trim($text);
}

function contains_any(string $message, array $needles): bool
{
    foreach ($needles as $needle) {
        if ($needle !== '' && stripos($message, (string) $needle) !== false) {
            return true;
        }
    }
    return false;
}

function detect_category(string $message, array $config): string
{
    if (contains_any($message, (array) ($config['service_hashtags'] ?? []))) {
        return 'service';
    }
    if (contains_any($message, (array) ($config['channel_hashtags'] ?? []))) {
        return 'channel';
    }

    if (preg_match('/\b(service interruption|service advisory|maintenance|outage|connectivity)\b/i', $message)) {
        return 'service';
    }
    if (preg_match('/\b(channel advisory|new channel|channel lineup|broadcast|transmission)\b/i', $message)) {
        return 'channel';
    }

    return ($config['default_category'] ?? 'service') === 'channel' ? 'channel' : 'service';
}

function shorten_text(string $text, int $width): string
{
    if (function_exists('mb_strimwidth')) {
        return mb_strimwidth($text, 0, $width, '…', 'UTF-8');
    }
    return strlen($text) > $width ? substr($text, 0, max(0, $width - 3)) . '...' : $text;
}

function make_title(string $message): string
{
    $lines = preg_split('/\R/u', $message) ?: [];
    foreach ($lines as $line) {
        $line = preg_replace('/(?:^|\s)#[\p{L}\p{N}_-]+/u', '', $line) ?? $line;
        $line = trim($line, " \t\n\r\0\x0B-–—:|");
        if ($line !== '') {
            return shorten_text($line, 110);
        }
    }
    return 'CableLink Advisory';
}

function make_summary(string $message): string
{
    $withoutTags = preg_replace('/(?:^|\s)#[\p{L}\p{N}_-]+/u', ' ', $message) ?? $message;
    $withoutTags = preg_replace('/\s+/u', ' ', $withoutTags) ?? $withoutTags;
    return shorten_text(trim($withoutTags), 320);
}

function find_attachment_image(array $post): string
{
    if (!empty($post['full_picture']) && is_string($post['full_picture'])) {
        return $post['full_picture'];
    }

    $attachments = $post['attachments']['data'] ?? [];
    if (!is_array($attachments)) {
        return '';
    }

    foreach ($attachments as $attachment) {
        $src = $attachment['media']['image']['src'] ?? '';
        if (is_string($src) && $src !== '') {
            return $src;
        }

        $subattachments = $attachment['subattachments']['data'] ?? [];
        if (!is_array($subattachments)) {
            continue;
        }
        foreach ($subattachments as $subattachment) {
            $src = $subattachment['media']['image']['src'] ?? '';
            if (is_string($src) && $src !== '') {
                return $src;
            }
        }
    }

    return '';
}

function graph_request(string $url): array
{
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_CAINFO => 'C:/xampp/php/cacert.pem',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_HTTPHEADER => ['Accept: application/json'],
            CURLOPT_USERAGENT => 'CableLink-Advisories-Prototype/1.0',
        ]);
        $body = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($body === false) {
            throw new RuntimeException($error !== '' ? $error : 'Unable to contact Facebook.');
        }
        return [$status, (string) $body];
    }

    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 20,
            'ignore_errors' => true,
            'header' => "Accept: application/json\r\nUser-Agent: CableLink-Advisories-Prototype/1.0\r\n",
        ],
    ]);
    $body = @file_get_contents($url, false, $context);
    if ($body === false) {
        throw new RuntimeException('Unable to contact Facebook. Enable PHP cURL or allow_url_fopen.');
    }

    $status = 200;
    foreach ($http_response_header ?? [] as $header) {
        if (preg_match('/^HTTP\/\S+\s+(\d{3})/', $header, $matches)) {
            $status = (int) $matches[1];
        }
    }
    return [$status, $body];
}

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('Allow: GET');
    respond(405, ['success' => false, 'message' => 'Only GET requests are allowed.']);
}

if (!is_file(CONFIG_FILE)) {
    respond(503, [
        'success' => false,
        'code' => 'facebook_not_configured',
        'message' => 'Facebook is not configured. Copy api/facebook.config.example.php to api/facebook.config.php.',
    ]);
}

$config = require CONFIG_FILE;
if (!is_array($config)) {
    respond(500, ['success' => false, 'message' => 'The Facebook configuration file is invalid.']);
}

$pageId = trim((string) ($config['page_id'] ?? ''));
$accessToken = trim((string) ($config['page_access_token'] ?? ''));
$apiVersion = trim((string) ($config['api_version'] ?? 'v26.0'));
$limit = max(1, min(100, (int) ($config['limit'] ?? 50)));
$cacheSeconds = max(0, (int) ($config['cache_seconds'] ?? 300));
$requiredHashtag = trim((string) ($config['required_hashtag'] ?? '#CablelinkAdvisory'));

if ($pageId === '' || $accessToken === '' || strpos($pageId, 'YOUR_') !== false || strpos($accessToken, 'YOUR_') !== false) {
    respond(503, [
        'success' => false,
        'code' => 'facebook_credentials_missing',
        'message' => 'Add the Facebook Page ID and Page Access Token to api/facebook.config.php.',
    ]);
}

if (!preg_match('/^v\d+\.\d+$/', $apiVersion)) {
    respond(500, ['success' => false, 'message' => 'The configured Graph API version is invalid.']);
}

if ($cacheSeconds > 0 && is_file(CACHE_FILE) && (time() - filemtime(CACHE_FILE)) < $cacheSeconds) {
    $cached = file_get_contents(CACHE_FILE);
    if (is_string($cached) && $cached !== '') {
        header('X-CableLink-Advisory-Cache: HIT');
        echo $cached;
        exit;
    }
}

$fields = implode(',', [
    'id',
    'message',
    'created_time',
    'permalink_url',
    'full_picture',
    'attachments.limit(5){media_type,media,target,url,subattachments.limit(10){media_type,media,target,url}}',
]);

$query = http_build_query([
    'fields' => $fields,
    'limit' => $limit,
    'access_token' => $accessToken,
], '', '&', PHP_QUERY_RFC3986);
$url = 'https://graph.facebook.com/' . rawurlencode($apiVersion) . '/' . rawurlencode($pageId) . '/published_posts?' . $query;

try {
    [$status, $body] = graph_request($url);
    $decoded = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
} catch (Throwable $error) {
    respond(502, [
        'success' => false,
        'code' => 'facebook_request_failed',
        'message' => 'The website could not retrieve Facebook advisories.',
        'detail' => $error->getMessage(),
    ]);
}

if ($status < 200 || $status >= 300 || isset($decoded['error'])) {
    $metaError = $decoded['error'] ?? [];
    respond(502, [
        'success' => false,
        'code' => 'facebook_api_error',
        'message' => (string) ($metaError['message'] ?? 'Facebook returned an error.'),
        'facebook_error_code' => $metaError['code'] ?? null,
    ]);
}

$items = [];
foreach (($decoded['data'] ?? []) as $post) {
    if (!is_array($post)) {
        continue;
    }

    $message = clean_text((string) ($post['message'] ?? ''));
    if ($message === '') {
        continue;
    }
    if ($requiredHashtag !== '' && stripos($message, $requiredHashtag) === false) {
        continue;
    }

    $items[] = [
        'id' => (string) ($post['id'] ?? hash('sha256', $message)),
        'category' => detect_category($message, $config),
        'title' => make_title($message),
        'message' => $message,
        'summary' => make_summary($message),
        'image_url' => find_attachment_image($post),
        'image_alt' => make_title($message),
        'created_time' => (string) ($post['created_time'] ?? ''),
        'permalink_url' => (string) ($post['permalink_url'] ?? ''),
        'source' => 'facebook',
    ];
}

$payload = [
    'success' => true,
    'data' => $items,
    'meta' => [
        'source' => 'facebook',
        'count' => count($items),
        'fetched_at' => gmdate(DATE_ATOM),
        'required_hashtag' => $requiredHashtag,
    ],
];
$json = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

if (!is_string($json)) {
    respond(500, ['success' => false, 'message' => 'Unable to encode the Facebook advisory response.']);
}

if (!is_dir(dirname(CACHE_FILE))) {
    @mkdir(dirname(CACHE_FILE), 0775, true);
}
@file_put_contents(CACHE_FILE, $json, LOCK_EX);

header('X-CableLink-Advisory-Cache: MISS');
echo $json;
