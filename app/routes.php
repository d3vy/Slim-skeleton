<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}/[{stuff}]]', function(Request $request, Response $response, array $args) {
	Controller\DefaultController::main($this, $request, $response, $args);
});