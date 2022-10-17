<?php
class typemodel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shopgarden;charset=utf8', 'root', '');
    }
    function getalltypes(){
            $query = $this->db->prepare("SELECT * FROM types");
            $query->execute();
            $types = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
            return $types;
            }
    }
