<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

$query = file_get_contents('database/Escolinhas.sql');

try {
    $dsn = 'mysql:host=' . $host . ';port=' . $port;
    $conn = new \PDO($dsn, $username, $password);
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    $conn->query($query);
} catch (\PDOException $e) {
    echo $e;
}