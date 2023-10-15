<?php


//Modelo para la conexión a la base de datos
class BaseDeDatos{
    const servidor = "localhost";   
    const usuarioDb = "root";
    const contrasena = "2020";
    const nombreBaseDeDatos ="logical";
    const conexion;

    //constructor
   public function __construct() {
      $this->conexion = new mysqli(servidor, usuarioDb, contrasena, nombreBaseDeDatos);
    }

    //método estatico conectar para no tener que instanciar
    public static function conectar(){

      try
      {
         if(!conexion->connect_errno){
            echo "fallo de conexión (".conexion->conect_errno. ")".conexion->conect_errno;
         }
         
         echo conexion->host_info . "\n";

         
      }catch(Exception $e)
      {
         return "Conexión fallido".$e->getMessage();
            
      }
   }
}