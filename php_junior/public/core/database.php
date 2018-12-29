<?php

function initGlobalDbConnection($config = []) {
    global $global_db_connection;
    if (!$global_db_connection) {
        $global_db_connection = new mysqli($config['host'], $config['user'], $config['password'], $config['db']);
        if ($global_db_connection->connect_errno)
        {
            printf($global_db_connection->connect_error);
            exit();
        }
    }
    return $global_db_connection;
}


function db($config = []) {
    static $connection;
    if (!$connection) {
        $connection = new mysqli($config['host'], $config['user'], $config['password'], $config['db']);
        if ($connection->connect_errno)
        {
            printf($connection->connect_error);
            exit();
        }
    }
    return $connection;
}

class Database {
    public $connection;
    private static $_instance;

    public static function getInstance($config = []) {
        if(!self::$_instance) {
            self::$_instance = new self($config);
        }
        return self::$_instance;
    }

    private function __construct($config) {
        $this->connection = new mysqli($config['host'], $config['user'], $config['password'], $config['db']);
        if ($this->connection->connect_errno)
        {
            printf($this->connection->connect_error);
            exit();
        }
    }
}