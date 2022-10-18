<?php

class gardenModel {

private $db;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shopgarden;charset=utf8', 'root', '');
    }   
// traigo todos los productos desde la base de datos
public function getAllTable() {
    $query = $this->db->prepare("SELECT * FROM products");
    $query->execute();
    $gardens = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $gardens;
}


//inserto nueva planta
    public function insertgarden($name, $price,$stock,$size,$type) {
        $query = $this->db->prepare("INSERT INTO products ( name, price, stock, size,type) VALUES (?, ?, ?,?,?)");
        $query->execute([$name,$price,$stock,$size,$type]);

        return $this->db->lastInsertId();
    }
// inserto nuevo tipo de planta.    
    function insertype($type,$season){
        $query=$this->db->prepare("INSERT INTO types (type, season) VALUES(?,?)");
        $query->execute([$type,$season]);
    }

//borro una planta de la base de datos.
    function deletegardenById($id) {
        $query = $this->db->prepare('DELETE FROM products WHERE id = ?');
        $query->execute([$id]);
    }
// borro un tipo de planta de la base de datos.
    function deletetypebyId($id){
        $query = $this->db-> prepare('DELETE FROM types WHERE id = ?');
        $query->execute([$id]);
    }

// actualizo un producto
    function updategarden($name, $price,$stock,$size,$type,$id){
        $query = $this-> db-> prepare('UPDATE products SET `name`=?,`price`=?, `stock`=?,`size`=?, `type`=? WHERE Id=?');
        $query->execute([$name, $price,$stock,$size,$type,$id]);
        }
}            
