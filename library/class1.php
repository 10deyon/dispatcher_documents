<?php

class database {
    private $serverName;
    private $userName;
    private $pass;
    private $dbname;

    public function __construct($server,$user,$password,$db){
        $this->serverName = $server;
        $this->userName = $user;
        $this->pass = $password;
        $this->dbname = $db;

    }
    public function connect(){
        return new mysqli($this->serverName,$this->userName,$this->pass,$this->dbname);
    }
}




?>