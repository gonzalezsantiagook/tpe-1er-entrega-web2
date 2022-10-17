<?php
require_once './app/models/garden.model.php';
require_once './app/views/garden.view.php';
require_once './app/helpers/auth.helper.php';
require_once './app/models/user.model.php';


class gardenController {
    private $model;
    private $view;
    private $type_model;

    public function __construct() {
        $this->model = new gardenModel();
        $this->view = new gardenView();
        $this->type_model = new typemodel();

// barrera de seguridad.
        $authHelper = new authHelper();
        $authHelper->checkLoggedIn();
    }
// muestro la tabla con los datos que tiene en db.
    function showtable() {
        $gardens = $this->model->getAllTable();
        $types = $this->type_model->getalltypes();
        $this->view->showTable($gardens,$types);
    }
    
// agrego un nuevo item en la tabla products.
    function addgarden() {
        $this->authHelper->checkLoggedIn();
        $name =$_POST['name'];
        $price =$_POST['price'];
        $stock =$_POST['stock'];
        $size = $_POST['size'];
        $type = $_POST['type'];
        $id = $this->model->insertgarden($name, $price,$stock,$size,$type);
        header("Location: " . BASE_URL."list"); 
    }
// agrego un nuevo item en la tabla types.
    function addtype(){
        $this->authHelper->checkLoggedIn();
        $type=$_POST['type'];
        $season=$_POST['season'];
        $this->model->insertype($type,$season);
        header("Location: " . BASE_URL."list"); 
    }
// elimino un elemento de la tabla products en la db.
    function deletegarden($id) {
        $this->model->deletegardenById($id);
        header("Location: " . BASE_URL."list");
    }
// elimino un elemento de la tabla types en la db.
    function deletetype($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deletetypebyId($id);
        header("location:". BASE_URL."list");
    }
// llamo a mostrar el tpl donde muestra el formulario para modificar el elemento.
    function showmodificproduct($Id){
        $this->authHelper->checkLoggedIn();
        $gardens = $this->model->getAllTable();
        foreach($gardens as $product){
                if ($product->Id==$Id)
                    $this->view->showmodificproduct($product);
        }
    }
// modifico un elemento de la tabla products.
    public  function modificgarden($Id){ 
        $this->authHelper->checkLoggedIn();
        $name =$_POST["name"];
        $price =$_POST["price"];
        $stock =$_POST["stock"];
        $size = $_POST["size"];
        $type = $_POST["type"];
        $this->model->updategarden($name, $price,$stock,$size,$type, $Id);
        header("Location: " . BASE_URL."list"); 
    }
// filtro tipos
    function filtertype($id){
        $this->authHelper->checkLoggedIn();
    $gardens = $this->model-> getAllTable();
    foreach ($gardens as $product) {
        if($product->id==$id)
                $this->view->showfilterproduct();
    }
    }

    
}