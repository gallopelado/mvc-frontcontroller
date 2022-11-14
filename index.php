<?php 

#require_once 'controller/CiudadController.php';

$controller = 'Inicio';

if(!isset($_REQUEST['c'])) {

    require_once "controller/$controller" . "Controller.php";

    $controller = ucwords($controller) . "Controller";
    $obj = new $controller();
    $obj->index();

} else {

    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? strtolower($_REQUEST['a']) : 'index';

    require_once "controller/" . ucwords($controller) . "Controller.php";
    $controller = ucwords($controller) . "Controller";
    $controller = new $controller();

    // llama a la accion
    call_user_func(array($controller, $accion));
}

?>