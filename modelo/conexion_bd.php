<?php


$SERVERNAME= "localhost";
$USERNAME= "root";
$PASSWORD="loaiza19";
$DBNAME="logical";
$PORT ="3304";
//creacion de la connection

    
    $conexion = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME,$PORT);
    $conexion->set_charset("utf8");



