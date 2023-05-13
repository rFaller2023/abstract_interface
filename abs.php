<?php

 abstract class Database
 {
    public $conn;
    public $servername="localhost";
    public $username="root";
    public $password="";
    public $dbname="abstract";

    public function _construct()
    {
        $this->conn=new mysqli ($this->servername, $this->username, $this->password);
        $db=("CREATE DATABASE IF NOT EXISTS $this->dbname");
        // var_dump($this->conn->error);
        $this->conn->query(db);
    }
    // abstract public function db(): string;
 }