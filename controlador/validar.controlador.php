<?php

//

session_start();



//validar los campos del login básico
if(!empty("ingresar")){

    if(empty($_POST["usuario"]) or empty($_POST["contrasena"]) ){
        echo "<div alert alert-danger>UN CAMPO O TODOS LOS CAMPOS ESTÁN VACIOS</div>";
    }else
    {
        $usuario = $_POST['usuario'];
        $contrasena = md5($_POST['contrasena']);
        //
        $sql = $conexion->query("SELECT * FROM empleado WHERE correo = '$usuario' AND contrasena = '$contrasena'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION['nombre']= $datos->nombre;
            $_SESSION['apellido']= $datos->apellido; //guardar los datos para mostarar los en la vista 
            //de inicio
            header("location:inicio.php");
        } else {
            echo "<div alert alert-danger>EL USUARIO NO EXISTE</div>";
        }
        
    }
}

?>