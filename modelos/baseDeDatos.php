<?php

// datos de la coneccion

<<<<<<< HEAD
$SERVERNAME= "localhost";
$USERNAME= "root";
$PASSWORD="2020";
$DBNAME="logical";
=======
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
>>>>>>> b706b5b68dd2bbcfb16dbe4291dbf6a3d2e8473d

//creacion de la connection

<<<<<<< HEAD
$conn=new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);

// verificacion de la coneccion 

if($conn->connect_error){
   die("error de conexion:". $conn->connect_error);
}

// mostraremos el contenido de la tabla

$sql_select_data= "SELECT * FROM empleado";
$result=$conn->query($sql_select_data);

// se encontraron resultados 

if($result->num_rows>0){
   //mostrar los datos de logical
   while($row=$result->fetch_assoc()){
      echo"id_empleado:".$row["id_empleado"]."<br>";
      echo "nombre:".$row["nombre"]."<br>";
      echo"apellido:".$row["apellido"]."<br>";
      echo "cedula:".$row["cedula"]."<br>";
      echo"fecha_nacimiento:".$row["fecha_nacimiento"]."<br>";
      echo "telefono:".$row["telefono"]."<br>";
      echo"correo:".$row["correo"]."<br>";
      echo "contraseña:".$row["contraseña"]."<br>";
=======
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
>>>>>>> b706b5b68dd2bbcfb16dbe4291dbf6a3d2e8473d
   }

}else{
   echo"no encontramos datos en la tabla";

   
}



   // cerramos la base de datos 

   $conn->close();
?>