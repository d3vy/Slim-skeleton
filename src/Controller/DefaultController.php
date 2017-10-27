<?php

namespace Controller;

class DefaultController {
	
	public static function main($container, $request, $response, $args) {
		$container->logger->info("Route '/'");
		
		// Render index view
		return $container->view->render($response, 'default/index.twig', $args);
	}
}