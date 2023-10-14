<?php

require_once "modelos/empleado.php";

$empleado=new EmpleadoModelo();

 echo $empleado->getNombre(); 


require_once "vista/loginlog/login.php";
