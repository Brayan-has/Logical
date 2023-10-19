
<?php

//

session_start();



//validar los campos del login básico
if(!empty("ingresar")){

    if(empty($_POST["usuario"]) or empty($_POST["contrasena"])){
          echo "Campos vacios";
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
            header("location:inicio");
        } else {
            
          echo "Usuario no existe";
        }
        
    }
}

?>

