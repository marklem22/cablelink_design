<?php

declare(strict_types=1);

/*
 * Copy this file to facebook.config.php and add the credentials from your
 * Meta Developer app. This file is executed by PHP and is never loaded by
 * the browser-side JavaScript.
 */
return [
    'api_version' => 'v26.0',
    'page_id' => 'YOUR_FACEBOOK_PAGE_ID',
    'page_access_token' => 'YOUR_PAGE_ACCESS_TOKEN',

    // Number of recent published Page posts Facebook should return.
    'limit' => 50,

    // Reuse the result for this many seconds to reduce Graph API calls.
    'cache_seconds' => 300,

    // Recommended: import only posts carrying this hashtag.
    // Set to an empty string to inspect every returned Page post.
    'required_hashtag' => '#CablelinkAdvisory',

    // Category detection. Add these hashtags to Facebook posts.
    'service_hashtags' => ['#CablelinkServiceAdvisory', '#ServiceAdvisory'],
    'channel_hashtags' => ['#CablelinkChannelAdvisory', '#ChannelAdvisory'],

    // Used when no category tag or clear category wording is present.
    'default_category' => 'service',
];
