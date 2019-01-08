<?php

namespace Controller;

use Slim\Http\Request;
use Slim\Http\Response;

class DefaultController {

	public static function main($container, Request $request, Response $response, array $args) {
		$container->logger->info("Route '/'");

		// Render index view
		return $container->view->render($response, 'default/index.twig', $args);
	}
}