<?php

include "../modele/connect.php";

class crud extends DB{
    public $table;

    public function __construct($table){
        parent::__construct("gestion_restarant");
        $this->table = $table;
    }
    public function select($conditions = []){

        $i = 0;
        $my_requet = "SELECT * FROM $this->table ";
        foreach ($conditions as $key => $value) {
            if($i == 0)
            {
                $my_requet .= "WHERE $key = '$value'";
            }
            else{
                $my_requet .= " AND $key = '$value'";
            }
            $i++;

        }
        $sql_requet = mysqli_query($this->conn, $my_requet);
        return $sql_requet;
    }
    public function delete($condition){
        $sql_requet = mysqli_query($this->conn,"DELETE from $this->table WHERE id = $condition ");
        return $sql_requet;
    }
    public function insert($element = []){
        $columns = "";
        $values_column = "";

        $elment_length =  count($element) -1 ;
        $i=0;
        foreach ($element as $key => $value) {
                if($i < $elment_length)
                {
                    $columns .="$key,";
                    $values_column .= "'$value',";
                }
                else{
                    $columns .="$key";
                    $values_column .= "'$value'";
                }
                $i++;
        }
        $my_requet = "INSERT INTO $this->table ($columns) VALUES ($values_column)"; 
        $sql_requet = mysqli_query($this->conn, $my_requet);
        return $sql_requet;
    }
    public function update($element = [],$condition){
        $i = 0;
        $my_requet = "UPDATE $this->table SET ";
        $elment_length =  count($element) -1 ;
        foreach ($element as $key => $value) {
            if($i == 0)
            {
                $my_requet .= "$key = '$value'";
            }
            if($i > 0){
                $my_requet .= " , $key = '$value'";
            }
            if($i == $elment_length){
                $my_requet .= " WHERE id = $condition";

            }
            $i++;
        }
        $sql_requet = mysqli_query($this->conn, $my_requet);
        return $sql_requet;
        
    } 
}

// $requet_1 = new crud("client");
// $sql_exucete = $requet_1->update(["name"=> "tbdlaaat" , "cin"=>"men" , "phone" => "+78367353532" , "id_commande" => "HDGD7777" , "adresse" => 'hay elfarah', "date_commande" => "19/09/77636"],11);







?>