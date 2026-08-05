<?php

declare(strict_types=1);

/*
 * Copy this file to facebook.config.php and add the credentials from your
 * Meta Developer app. This file is executed by PHP and is never loaded by
 * the browser-side JavaScript.
 */
return [
    'api_version' => 'v26.0',
    'page_id' => '719150924959557',
    'page_access_token' => 'EAAW2oa1Q8ZBwBSNs1rULv7DxhtIlE3Xh3Ae8HSJG1YNcFDRugcZCnTmslQ7clFHUKYMLY7zrWZAzG6ShubnhHT1LoWwy509Gwmq4XRZCn4mcz5RRDBVYv49uqgpYWvq0JpZB4xPuDFPDoLxIeN7BeyfoQUp8iU9cjY6LaIDJIAR3I9KfE29hrz9GQfInRKr8kZB1PNSkiztS4sYVf0joXPi5nLDjqVZCZAfsKwzK0DlDlQAWSwjDDBMMuy8ZD',

    // Number of recent published Page posts Facebook should return.
    'limit' => 50,

    // Reuse the result for this many seconds to reduce Graph API calls.
    'cache_seconds' => 300,

    // Recommended: import only posts carrying this hashtag.
    // Set to an empty string to inspect every returned Page post.
    'required_hashtag' => '#jilbacnotan',

    // Category detection. Add these hashtags to Facebook posts.
    'service_hashtags' => [],
    'channel_hashtags' => ['#jilbacnotan'],

    // Used when no category tag or clear category wording is present.
    'default_category' => 'channel',
];
