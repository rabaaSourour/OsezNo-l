<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__  . '/../');
$dotenv->load();

return [
    'DB_HOST' => $_ENV['DB_HOST'],
    'DB_USER' => $_ENV['DB_USER'],
    'DB_PASSWORD' => $_ENV['DB_PASSWORD'],
    'DB_NAME' => $_ENV['DB_NAME'],
    'DB_PORT' => $_ENV['DB_PORT'],
    'URI' => $_ENV['URI']
];
