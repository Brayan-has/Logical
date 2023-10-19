<?php


include_once "./modelos/baseDeDatos.php";



 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Aquí puedes obtener los datos del formulario
    $nombre = $_POST["usuario"];
    $contraseña = $_POST["contrasena"];

}




include_once "./vista/principal/principal.php";
