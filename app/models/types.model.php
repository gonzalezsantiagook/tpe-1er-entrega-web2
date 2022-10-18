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
    function ProductsAll($products) {
                $query = $this->db->prepare("SELECT * FROM types WHERE id=?");
                $ProductsAll=array();
                foreach($products as $product) {
                    $pr = new stdClass();
                    $pr->id = $product->Id;
                    $pr->name = $product->name;
                    $pr->price= $product->price;
                    $pr->stock = $product->stock;
                    $pr->size= $product->size;
                    $query->execute(array($product->type));
                    $types = $query->fetchAll(PDO::FETCH_OBJ);

                    foreach($types as $type){
                        $pr->type= $type->type;
                        $pr->season= $type->season;
            }
            array_push($ProductsAll, $pr);
        }
        return $ProductsAll;
    }     
    function updatetype($id,$type,$season){
        $query = $this-> db-> prepare('UPDATE types SET `type`=?,`season`=? WHERE id=?');
        $query->execute([$type, $season,$id]);
        }
    }