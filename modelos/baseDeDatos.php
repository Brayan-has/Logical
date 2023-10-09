<?php

//Modelo para la conexión a la base de datos
class BaseDeDatos{
    const servidor = "localhost";   
    const usuarioDb = "root";
    const contrasena = "2020";
    const nombreBaseDeDatos ="logical";

    //método estatico conectar para no tener que instanciar
    public static function conectar(){
     $conexion = mysqli_conect(servidor,usuarioDb,contrasena,nombreBaseDeDatos)

     if($conexion){

      echo "conexion exitosa";
     }else{

      echo "no se pudo conectar";
     }
      
   }
}