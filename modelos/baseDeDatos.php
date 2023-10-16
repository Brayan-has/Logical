<?php

// datos de la coneccion

$SERVERNAME= "localhost";
$USERNAME= "root";
$PASSWORD="2020";
$DBNAME="logical";

//creacion de la connection

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
   }

}else{
   echo"no encontramos datos en la tabla";

   
}



   // cerramos la base de datos 

   $conn->close();
?>