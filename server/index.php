<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

require __DIR__ . '/conf/cors.php';

$routes = glob(__DIR__ . '/app/routes/*.php');

foreach ($routes as $route) {
    require_once $route;
}

\Flight::start();
