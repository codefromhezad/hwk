<?php

return array(
    'driver'    => 'mysql',
    'host'      => env('DATABASE_HOST', 'localhost'),
    'database'  => env('DATABASE_NAME', 'test'),
    'username'  => env('DATABASE_USER', 'test'),
    'password'  => env('DATABASE_PASSWORD', 'l4m3p455w0rd!'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
);

