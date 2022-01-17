
<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', 'TEKUN-DB'),
        'host'           => env('DB_HOST', '112.137.162.7'),
        'port'           => env('DB_PORT', '1521'),
        'database'       => env('DB_DATABASE', 'fmsproduction'),
        'service_name'   => env('DB_SERVICENAME', 'tekun-db'),
        'username'       => env('DB_USERNAME', 'sa'),
        'password'       => env('DB_PASSWORD', 'csctekun'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '11g'),
        'dynamic'        => [],
    ],
];
