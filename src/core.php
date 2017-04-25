<?php

// Controllers
foreach(scandir(__DIR__ . '/Controller') as $controller) {
	if($controller != '.' && $controller != '..')
		require_once __DIR__ . '/Controller/' . $controller;
}

// Custom classes
require_once __DIR__ . '/Twig/Extension/Asset.php';
