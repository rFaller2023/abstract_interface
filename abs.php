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
    }
    abstract public function db(): string;
 }