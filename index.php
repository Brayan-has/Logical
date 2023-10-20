<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
// include_once "modelos/baseDeDatos.php";
>>>>>>> 9e265c9411903e3ca8c5ca8d76d18e73483ce798
//Capturamos la petición de la url, si se no se pasa nada entrará a la vista principal
//de lo contrario 
if(!isset($_GET['c'])){

    include_once "controlador/login.controlador.php";
    $controlador = new LoginControlador();
    call_user_func(array($controlador,"login"));

}else
{
    $controlador = $_GET['c'];
    require_once "controlador/$controlador.controlador.php";
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['post']) ? $_GET['post'] : "login";
    call_user_func(array($controlador,$accion));
}
=======
//redirijo hacía view
header("location: vista/view");
>>>>>>> 5d98e49f600699f20ab04559ac530657c80690a0
