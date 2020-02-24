<?php

return [

    'middlewares' => [
        'required' => [
            'ValidateCsrfToken',
        ],
    ],

    'app_status' => env('APP_STATUS'),
    'app_debug' => env('APP_DEBUG'),

    'app_name' => env('APP_NAME'),
    'app_url' => env('APP_URL'),

    'database' => [
        'use_db' => false,
        'db' => 'mysql',
        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'name' => env('DB_NAME'),
                'host' => env('DB_HOST'),
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
            ],

            'sqlite' => [
                // php sqlite extension is required
                'driver' => 'sqlite',
                'src' => env('DB_FILE'),
            ],
        ],
    ],

    'cookies_default_life_time' => 2592000,
    'cache_default_life_time' => 604800,


    'clean_views_output' => false,


    'hide_php_version_header' => false,


    'forbiden_uris' => [
        // in this item, you can set some uris to be forbiden
    ]

];
