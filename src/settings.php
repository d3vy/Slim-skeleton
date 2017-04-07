<?php

$appEnvironment = 'dev';

return [
    'settings' => [
        'displayErrorDetails'       => $appEnvironment == 'dev',
        'addContentLengthHeader'    => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
	        'cache'         => $appEnvironment != 'dev',
	        'cache_path'    => __DIR__ . '/../cache/twig/',
        ],

        // Monolog settings
        'logger' => [
            'name'  => 'slim-app',
            'path'  => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
