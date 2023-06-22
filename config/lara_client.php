<?php

return [
    'default' => env('API_CLIENT', 'api'),

    'connections' => [
        'cats' => [
            'base_uri' => 'https://cat-fact.herokuapp.com',
            'api_key' => '',
            'default_headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'api_secret' => env('API_API_SECRET', ''),
            'timeout' => env('API_TIMEOUT', 30),
            'rate_limit' => [
                'limit' => env('API_RATE_LIMIT', 60),
                'interval' => env('API_RATE_LIMIT_INTERVAL', 60),
            ],
        ],
        'holidays' => [
            'base_uri' => 'https://www.gov.uk/bank-holidays.json',
            'api_key' => '',
            'default_headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'api_secret' => env('API_API_SECRET', ''),
            'timeout' => env('API_TIMEOUT', 30),
            'rate_limit' => [
                'limit' => env('API_RATE_LIMIT', 60),
                'interval' => env('API_RATE_LIMIT_INTERVAL', 60),
            ],
        ],
        'currency' => [
            'base_uri' => 'https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1',
            'api_key' => '',
            'default_headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'api_secret' => env('API_API_SECRET', ''),
            'timeout' => env('API_TIMEOUT', 30),
            'rate_limit' => [
                'limit' => env('API_RATE_LIMIT', 60),
                'interval' => env('API_RATE_LIMIT_INTERVAL', 60),
            ],
        ],
    ],
];
