<?php

class DB{

    private $DB_SERVER ='localhost';
    private $DB_USERNAME ='root';
    private $DB_PASSWORD ='';
    private $DB_NAME;
    protected $conn;

    protected function __construct($DB_NAME){
        $this->DB_NAME = $DB_NAME;
        $this->conn =  mysqli_connect($this->DB_SERVER,$this->DB_USERNAME,$this->DB_PASSWORD,$this->DB_NAME) ;
    }
}
    
?>
