<?php

$parameters = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/../config/parameters.yaml'))['parameters'];

return [
    'settings' => [
        'displayErrorDetails'       => $parameters['environment'] == 'dev',
        'addContentLengthHeader'    => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
	        'cache'         => $parameters['environment'] != 'dev',
	        'cache_path'    => __DIR__ . '/../cache/twig/',
        ],

        // Monolog settings
        'logger' => [
            'name'  => $parameters['app_name'],
            'path'  => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
