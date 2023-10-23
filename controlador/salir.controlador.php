<?php
//hago uso de session_start para usar globalmente información de los usuarios
//seguido estos datos serán destruidos para finalmente redirigir al usuario en general
//hacia la vista del login (ingreso de sesión) 
session_start();
session_destroy();



header("location:../vista/login");
?>