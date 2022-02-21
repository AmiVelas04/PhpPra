<?php

use FTP\Connection;

require_once "config/config.php";
class DB
{
    private $host;
    private $db;
    private $user;
    private $pass;
    public $conn;

    public function __construct()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant('DB');
        $this->user = constant('DB_USER');
        $this->pass = constant('DB_PASS');

        try {
            $this->conn = new PDO('myslq::host' . $this->host . '; dbname=' . $this->db, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
