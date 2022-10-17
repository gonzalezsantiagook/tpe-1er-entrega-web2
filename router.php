<?php
require_once './app/controllers/garden.controller.php';
require_once './app/helpers/auth.helper.php';
require_once './app/controllers/authcontroller.php';
require_once './app/controllers/homecontroller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);



// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $homeController = new homeController();
        $homeController->showhome();
        break;

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

    case 'addtype':
        $gardenController = new gardenController();
        $gardenController->addtype();
        break;

    case 'delete':
        $gardenController = new gardenController();
        $id = $params[1];
        $gardenController->deletegarden($id);
        break;

    case 'deletype':
        $gardenController = new gardenController();
        $gardenController->deletetype($id);
        break;

    case 'modificproduct':
        $gardenController = new gardenController();
        $id = $params[1];
        $gardenController -> showmodificproduct($id);
        break;

    case 'update':
        $gardenController = new gardenController();
        $id = $params[1];
        $gardenController -> modificgarden($id);
        break;
    case 'filter':
        $gardenController = new gardenController();
        $id = $params[1];
        $gardenController-> filtertype($id);
        break;

    default:
        echo('404 Page not found');
        break;
}
