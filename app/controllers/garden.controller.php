<?php
require_once './app/models/garden.model.php';
require_once './app/views/garden.view.php';
require_once './app/helpers/auth.helper.php';


class gardenController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new gardenModel();
        $this->view = new gardenView();

        // barrera de seguridad
        $authHelper = new authHelper();
        $authHelper->checkLoggedIn();
    }

    function showtable() {
        $gardens = $this->model->getAllTable();
        $this->view->showTable($gardens);
    }

    
    function addgarden() {
        $name =$_POST['name'];
        $price =$_POST['price'];
        $image =$_POST['image'];
        $stock =$_POST['stock'];
        $size = $_POST['size'];
        $type = $_POST['type'];
        $id = $this->model->insertgarden($name, $price, $image,$stock,$size,$type);

        header("Location: " . BASE_URL); 
    }
    function deletegarden($id) {
        $this->model->deletegardenById($id);
        header("Location: " . BASE_URL);
    }


}
