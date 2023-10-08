<?php

//Modelo para la conexión a la base de datos
class BaseDeDatos{
    const servidor = "localhost";   
    const usuarioDb = "root";
    const contraseña = "";
    const nombreBaseDeDatos ="logical";

    //método estatico conectar para no tener que instanciar
    public static function Conectar(){
      try
      {
         $conexion = new PDO("mysql:host=".self::servidor.
         "dbname=".self::nombreBaseDeDatos.";charset-utf8",self::usuarioDb,
         self::contraseña)
         
         return $conexion;

         //ajustar parametros de errores en visualización
         $conexion->setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
      }catch(PDOException $e)
      {
         return "Conexión fallida".$e->getMessage()

      }
      
   }
}