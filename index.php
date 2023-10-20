<?php
//Capturamos la petición de la url, si se no se pasa nada entrará a la vista principal
//de lo contrario 
if(!isset($_GET['c'])){

    include ("controlador/login.controlador.");
    $controlador = new LoginControlador();
    call_user_func(array($controlador,"login"));

}else
{
    // $controlador = $_GET['c'];
    // require_once "controlador/$controlador.controlador.php";
    // // $controlador = ucwords($controlador)."controlador";
    // // $controlador = new $controlador;
    // // $accion = isset($_GET['post']) ? $_GET['post'] : "login";
    // call_user_func(array($controlador,$accion));
    header("../vista/login");
}