<?php
/*

*/

//validar si se ha presionado el boton de REGISTRAR
if(!empty($_POST["registro"])){
    if(empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['nacimiento']) or empty($_POST['cedula']) or empty($_POST['telefono']) or empty($_POST['correo']) or empty($_POST['contrasena']) or empty($_POST['cargo'])){

    }else {
        //capturamos cada dato del usuario
        //tabla de empleado
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nacimiento = $_POST['nacimiento'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $cargo = $_POST['cargo'];
        $correo = $_POST['correo'];
        $contrasena = md5($_POST['contrasena']);
        //tabla de cargo
        $cargo = $_POST['cargo'];
        //tabla de horario

      //sentencia para registrar el usuario
      $sql = $conexion->query("INSERT INTO empleado (nombre,apellido,fecha_nacimiento,cedula,telefono,correo,contrasena,cargo) 
      VALUES ( '$nombre','$apellido','$nacimiento',$cedula,$telefono,'$correo','$contrasena','$cargo')");
    
        if ($sql==1) {
            echo "USUARIO REGISTRADO CORRECTAMENTE";
        } else {
            echo "ERROR AL REGISTRAR";
        }

        // $sql = $conexion->query("INSERT INTO cargo (cargo) VALUES ($cargo);");
        
    }

}

?>