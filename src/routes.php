<?php
// Routes

$app->get('/[{name}/[{stuff}]]', function ($request, $response, $args) {
	Controller\DefaultController::main($this, $request, $response, $args);
});
