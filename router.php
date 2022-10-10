<?php
require_once './app/controllers/garden.controller.php';
require_once './app/helpers/auth.helper.php';
require_once './app/controllers/authcontroller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', santiago]
$params = explode('/', $action);



// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $gardenController = new gardenController();
        $gardenController->showTable();
        break;
    case 'login':
        $authController = new authController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new authController();
        $authController->validateUser();
        break;
    
    case 'logout':
        $authController = new authController();
        $authController->logout();
        break;
    case 'add':
        $gardenController = new gardenController();
        $gardenController->addgarden();
        break;
    case 'delete':
        $gardenController = new gardenController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $gardenController->deletegarden($id);
        break;   


    default:
        echo('404 Page not found');
        break;
}
