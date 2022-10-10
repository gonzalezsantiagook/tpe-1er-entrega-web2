<?php

class gardenModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shopgarden;charset=utf8', 'root', '');
    }
    public function getAllTable() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM products");
        $query->execute();

        // 3. obtengo los resultados
        $gardens = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $gardens;
    }
    public function insertgarden($name, $prize, $image,$stock,$size,$type) {
        $query = $this->db->prepare("INSERT INTO products ( name, prize, image, stock, size,type) VALUES (?, ?, ?, ?,?,?)");
        $query->execute([$name,$prize,$image,$stock,$size,$type]);

        return $this->db->lastInsertId();
    }

    function deletegardenById($id) {
        $query = $this->db->prepare('DELETE FROM products WHERE id = ?');
        $query->execute([$id]);
    }
}
