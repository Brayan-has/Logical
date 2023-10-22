<?php


$SERVERNAME= "localhost";
$USERNAME= "root";
$PASSWORD="loaiza19";
$DBNAME="logical";
$PORT ="3306";
//creacion de la connection

 try
{
    $conexion = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME,$PORT);
    $conexion->set_charset("utf8");
}
catch (Exception $e) {?>
        <script>

        Swal.fire({
            icon: 'error',
            title: '',
            text: 'Los campos no pueden estar vacios',
            footer: ''
    }).$e;
    <?php }    





