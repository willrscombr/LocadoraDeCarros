<?php

class Connection {
    private $dsn = 'mysql:dbname=locacaocarros;host=127.0.0.1';
    private $username = "root";
    private $passwd = "";
    public $conn = "";
    
    public function __construct() {
   
}
    public function conectar(){
    try{
     $conn = new PDO($this->dsn, $this->username, $this->passwd);
    // echo 'Tudo Ok';
   }catch(PDOException $pdoerror){
       die($pdoerror->getTraceAsString());
   }
    return $conn;
    }
    
  
}
