<?php

class connection{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db   = 'oop';
    
    public function __contruct($host,$user,$pass,$db){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db   = $db;
    }
    
    public function connect_mysqli(){
        $connection = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        return $connection;
    }
}

?>