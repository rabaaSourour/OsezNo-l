<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();
$router->add('GET', '/', 'App\Controller\HomeController::home');
$router->add('GET', '/calendar', 'App\Controller\DefaultController::calendar');
$router->add('GET', '/register', 'App\Controller\RegisterController::inscription');
$router->add('POST', '/register', 'App\Controller\RegisterController::inscription');

$router->handleRequest();
