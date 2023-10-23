<?php

//conexión a la base de datos básico por medio de la clase mysqli
$SERVERNAME= "localhost";
$USERNAME= "root";
$PASSWORD="";
$DBNAME="logical";
$PORT ="3306";
//creacion de la connection
// intento la conexión en caso de fallar evitar que la app creachee
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





