<?php

return [
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
];
