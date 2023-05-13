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


    
    abstract public function dbname() : string; 
        
}
class Abstract extends Database
{
    public function dbname() : string;
    {
        $data="CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($data);
    }
}
$rose= new Database();
$rose->dbname();
