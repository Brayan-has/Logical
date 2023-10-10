<?php

class LoginControlador{

    private $modelo;

    public function __contruct(){
       
        //$this->modelo = new Empleado();
    }
    //devuelve la vista principal para el login
    public function login(){
        $bd = BaseDeDatos::conectar();
        include_once "vista/loginlog/login.php";
     
    }

 
}