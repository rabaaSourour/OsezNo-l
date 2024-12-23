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
$router->add('POST', '/create', 'App\Controller\HomeController::create');
$router->add('GET', '/create', 'App\Controller\HomeController::create');
$router->add('GET', '/edite', 'App\Controller\HomeController::edit');
$router->add('POST', '/edite', 'App\Controller\HomeController::edit');
$router->add('GET', '/delete', 'App\Controller\HomeController::delete');
$router->add('POST', '/delete', 'App\Controller\HomeController::delete');
$router->add('GET', '/share', 'App\Controller\HomeController::share');
$router->add('GET', '/myCalendars', 'App\Controller\HomeController::myCalendars');
$router->add('POST', '/myCalendars', 'App\Controller\HomeController::myCalendars');
$router->add('POST', '/viewCalendar', 'App\Controller\HomeController::viewCalendar');
$router->add('GET', '/viewCalendar', 'App\Controller\HomeController::viewCalendar');

$router->add('GET', '/api/calendar/days', 'App\Controller\CalendarController::getAllDays');
$router->add('POST', '/api/calendar/unlock', 'App\Controller\CalendarController::unlockDay');
$router->add('PUT', '/api/calendar/day', 'App\Controller\CalendarController::updateDayMessage');
$router->add('GET', '/api/calendar/quotes', 'App\Controller\CalendarController::getQuotes');
$router->add('GET', '/api/calendar/days', 'App\Controller\CalendarController::getDays');
$router->add('GET', '/api/calendar/days/{day}', 'App\Controller\CalendarController::getDayContent');
$router->add('GET', '/api/calendar/quotes/{day}', 'App\Controller\CalendarController::getQuoteForDay');
$router->add('GET', '/api/calendar/surprise/{day}', 'App\Controller\CalendarController::getSurpriseForDay');

$router->handleRequest();