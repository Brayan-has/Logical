<?php
/*

*/

//validar si se ha presionado el boton de REGISTRAR
<<<<<<< HEAD
if(!empty($_POST["registro"])){
    if(empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['nacimiento']) or empty($_POST['cedula']) or empty($_POST['telefono']) or empty($_POST['correo']) or empty($_POST['contrasena'])){

    }else {
        //capturamos cada dato del usuario
=======
if (!empty($_POST["registro"])) {
    if (empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['nacimiento']) or empty($_POST['cedula']) or empty($_POST['telefono']) or empty($_POST['correo']) or empty($_POST['contrasena']) or empty($_POST['cargo'])) {

    } else {
        //capturamos cada dato del usuario
        //tabla de empleado
>>>>>>> 5d98e49f600699f20ab04559ac530657c80690a0
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nacimiento = $_POST['nacimiento'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
<<<<<<< HEAD
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

    


=======
        $cargo = $_POST['cargo'];
        $correo = $_POST['correo'];
        $contrasena = md5($_POST['contrasena']);
        //tabla de cargo
        $cargo = $_POST['cargo'];
        //tabla de horario

        //sentencia para registrar el usuario
        $sql = $conexion->query("INSERT INTO empleado (nombre,apellido,fecha_nacimiento,cedula,telefono,correo,contrasena,cargo) 
      VALUES ( '$nombre','$apellido','$nacimiento',$cedula,$telefono,'$correo','$contrasena','$cargo')");
        if ($sql == true) { ?>


            <script>
                Swal.fire(
                    '¡USUARIO REGISTRADO CORRECTAMENTE!',
                    '',
                    'success'
                )
            </script>

        <?php } else {
            echo "error";
        }

        // $sql = $conexion->query("INSERT INTO cargo (cargo) VALUES ($cargo);");

    }

>>>>>>> 5d98e49f600699f20ab04559ac530657c80690a0
}

?>