<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();
$router->add('GET', '/', 'App\Controller\HomeController::home');
$router->add('GET', '/register', 'App\Controller\RegisterController::inscription');
$router->add('POST', '/register', 'App\Controller\RegisterController::inscription');
$router->add('GET', '/signin', 'App\Controller\SigninController::login');
$router->add('POST', '/signin', 'App\Controller\SigninController::login');
$router->add('GET', '/logout', 'App\Controller\SigninController::logout');
$router->add('GET', '/calendar', 'App\Controller\CalendarController::show');
$router->add('POST', '/calendar', 'App\Controller\CalendarController::show');
$router->add('GET', '/api/calendar/days', 'App\Controller\CalendarController::getAllDays');
$router->add('POST','/api/calendar/unlock', 'App\Controller\CalendarController::unlockDay');
$router->add('PUT','/api/calendar/day', 'App\Controller\CalendarController::updateDayMessage');
$router->add('GET','/api/calendar/quotes', 'App\Controller\CalendarController::getQuotes');

$router->handleRequest();
