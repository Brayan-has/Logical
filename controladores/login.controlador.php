<?php
include_once "./modelos/baseDeDatos.php";
class LoginControlador{

    

    public function __contruct(){
       
       
    }
    //devuelve la vista principal para el login
    public function login(){
       
        include_once "vista/loginlog/login.php";
        
    }
}