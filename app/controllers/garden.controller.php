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
        $this->model->deletetypebyId($id);
        header("location:". BASE_URL."list");
    }
// llamo a mostrar el tpl donde muestra el formulario para modificar el elemento.
    function showmodificproduct($Id){
        $gardens = $this->model->getAllTable();
        $types = $this->type_model->getalltypes();
        $ProductsAll = $this->type_model->ProductsAll($gardens);
        foreach($ProductsAll as $product){
                if ($product->id==$Id)
                    $this->view->showmodificproduct($product,$types);
        }
    }
// modifico un elemento de la tabla products.
    public  function modificgarden($id){ 
        $name =$_POST["name"];
        $price =$_POST["price"];
        $stock =$_POST["stock"];
        $size = $_POST["size"];
        $type = $_POST["type"];
        $this->model->updategarden($name, $price,$stock,$size,$type,$id);
        header("Location: " . BASE_URL."list");
    }
    function modifictype($id){
        $types =$this->type_model->getalltypes();
        foreach ($types as $type) {
            if ($type->id==$id)
                $this->view->modifictype($type,$types);
        }


    }

    function updatetype($id){
        $type = $_POST['type'];
        $season = $_POST['season'];
        $this->type_model-> updatetype($id,$type,$season);
            header("Location: " . BASE_URL."list");
    }  

// filtro tipos
    function filtertype($id){
    $gardens = $this->model-> getAllTable();
    $filter = array();
    foreach ($gardens as $product) {
        if($product->type==$id)
            array_push($filter,$product);
    }
    $this->view->showfilterproduct($filter);
    }


    function seeproduct($id){
    $gardens = $this->model-> getAllTable();
    $ProductsAll = $this->type_model->ProductsAll($gardens);
    foreach ($ProductsAll as $product) {  
        if($product->id==$id)
            $this->view->seeproduct($product);
    }
    }
    
}