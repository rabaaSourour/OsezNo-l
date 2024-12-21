<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->add('GET', '/', 'App\Controller\HomeController::show');
$router->add('GET', '/register', 'App\Controller\RegisterController::inscription');
$router->add('POST', '/register', 'App\Controller\RegisterController::inscription');
$router->add('GET', '/signin', 'App\Controller\SigninController::login');
$router->add('POST', '/signin', 'App\Controller\SigninController::login');
$router->add('GET', '/logout', 'App\Controller\SigninController::logout');
$router->add('GET', '/calendar', 'App\Controller\CalendarController::show');
$router->add('POST', '/calendar', 'App\Controller\CalendarController::create');
$router->add('GET', '/calendar/edit/{id}', 'App\Controller\CalendarController::edit');
$router->add('POST', '/calendar/edit/{id}', 'App\Controller\CalendarController::update');
$router->add('GET', '/calendar/delete/{id}', 'App\Controller\CalendarController::delete');
$router->add('GET', '/calendar/share/{id}', 'App\Controller\CalendarController::share');

$router->add('GET', '/api/calendar/days', 'App\Controller\CalendarController::getAllDays');
$router->add('POST', '/api/calendar/unlock', 'App\Controller\CalendarController::unlockDay');
$router->add('PUT', '/api/calendar/day', 'App\Controller\CalendarController::updateDayMessage');
$router->add('GET', '/api/calendar/quotes', 'App\Controller\CalendarController::getQuotes');
$router->add('GET', '/api/calendar/days', 'App\Controller\CalendarController::getDays');
$router->add('GET', '/api/calendar/days/{day}', 'App\Controller\CalendarController::getDayContent');
$router->add('GET', '/api/calendar/quotes/{day}', 'App\Controller\CalendarController::getQuoteForDay');
$router->add('GET', '/api/calendar/surprise/{day}', 'App\Controller\CalendarController::getSurpriseForDay');

$router->handleRequest();