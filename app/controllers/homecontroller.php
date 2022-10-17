<?php
require_once './app/models/types.model.php';
require_once './app/models/garden.model.php';
require_once './app/views/home.view.php';
class homeController {
    private $view;
    private $products_model;
    private $types_model;

    public function __construct() {
        $this->products_model = new gardenModel();
        $this->view = new homeView();
        $this->types_model = new typemodel();
    }
    function showhome (){
        $products = $this->products_model->getAllTable();
        $types = $this-> types_model-> getalltypes();
        $this->view->showhome($products, $types);
    }
}