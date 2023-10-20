<?php
/*

*/

//validar si se ha presionado el boton de REGISTRAR
if(!empty($_POST["registro"])){
    if(empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['nacimiento']) or empty($_POST['cedula']) or empty($_POST['telefono']) or empty($_POST['correo']) or empty($_POST['contrasena']) or empty($_POST['cargo'])){

    }else {
        //capturamos cada dato del usuario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nacimiento = $_POST['nacimiento'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $cargo = $_POST['cargo'];
        $correo = $_POST['correo'];
        $contrasena = md5($_POST['contrasena']);


        

      //sentencia para registrar el usuario
      $sql = $conexion->query("INSERT INTO empleado (nombre,apellido,fecha_nacimiento,cedula,telefono,correo,contrasena) VALUES ( '$nombre','$apellido','$nacimiento',$cedula,$telefono,'$correo','$contrasena')");
    
        if ($sql==1) {
            echo "USUARIO REGISTRADO CORRECTAMENTE";
        } else {
            echo "ERROR AL REGISTRAR";
        }
        
    }

    


}

?>