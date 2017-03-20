<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],
        'db' => [
            'driver' => DB_DRIVER,
            'host' => DB_HOST,
            'username' => DB_USERNAME,
            'password' => DB_PASSWORD,
            'database' => DB_NAME,
            'charset' => DB_CHARSET,
            'collation' => DB_COLLATION,
            'prefix' => DB_PREFIX,
        ],
        // Monolog settings
        'logger' => [
            'name' => 'choulwar-constructions',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],


    ],
];
