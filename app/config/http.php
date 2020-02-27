<?php

return [
    'middlewares' => [
        'required' => [
            'ValidateCsrfToken',
        ],
    ],

    'forbiden_uris' => [
        // in this array, you can set some uris to be forbiden
    ],

    'hide_php_version_header' => false,
    'cookies_default_life_time' => 2592000,
];
