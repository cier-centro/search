<?php

class Connect{
    
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $bd = 'cpa';
    private $link;
    private $stmt;
    static $_instance;
    
    public function __construct(){
        $this->connetDataBase();
    }
    
    public function connetDataBase(){
        $this->link = mysqli_connect($this->server, $this->user, $this->password,$this->bd);
    }
    
    public function executeQuery ($sql){
        $this->stmt = mysqli_query($this->link,$sql);
        return $this->stmt;
    }
}


