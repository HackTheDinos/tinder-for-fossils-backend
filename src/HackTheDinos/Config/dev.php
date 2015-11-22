<?php

return [

    'project.name' => 'Hack The Dinos API',

    'debug' => true,

    'cors.domains' => 'http://localhost:8080',

    'database' => [
        'pdo' => [
            'dbname'     => 'hackthedinos',
            'connection' => 'mysql:dbname=hackthedinos;host=127.0.0.1',
            'user'       => 'hackthedinos',
            'password'   => 'hackthedinos'
        ],
    ],

    'log' => [
        'level' => \Monolog\Logger::DEBUG,
        'name' => 'hackthedinos.api',
        'key' => 'logs',
        'file' => __DIR__.'/../../../logs/php5/errors.monolog.log'
    ],

];