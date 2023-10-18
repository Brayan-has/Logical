<?php


$SERVERNAME= "localhost";
$USERNAME= "root";
$PASSWORD="";
$DBNAME="logical";
$PORT ="3305";
//creacion de la connection

    
    $conexion = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME,$PORT);
    $conexion->set_charset("utf8");
// } catch (Exception $e) {
//     echo "<script>alert('error al conectar la base de datos')</script>".$e;
// }




// $conexion->close();