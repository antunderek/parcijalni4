<?php

namespace classes;
use PDO;

class DB {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $config = ConfHandler::get('dbconf');
        var_dump($config);
        $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}";
        $user = $config['user'];
        $password = $config['password'];
        try {
            $this->conn = new PDO($dsn, $user, $password);
        } catch (\PDOexception $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function conn() {
        return $this->conn;
    }

    private function __clone() {}
}