<?php

namespace models;

class Model
{
    protected $conn;
    private $host;
    private $port;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->port = $_ENV['DB_PORT'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->dbname = $_ENV['DB_DATABASE'];
        $this->connection();
    }
    public function connection(): void
    {
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
        $this->conn = new \PDO($dsn, $this->username, $this->password);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}