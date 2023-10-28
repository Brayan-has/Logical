<?php

//

session_start();
include("../../modelo/conexion_bd.php");


// por medio de este controlador obtendré acceso a la base de datos




//validar los campos del login básico
if (!empty($_POST["act"])) {
    echo "entro en el primer if";

    if (empty($_POST["id_usuario"]) or empty($_POST['apellido_usuario']) or empty($_POST["cedula"]) or empty($_POST['fecha_nacimiento']) or empty($_POST['correo_usuario']) or empty($_POST['telefono_usuario']) or empty($_POST['cargo_usuario'])) {

       echo "entro en el último if normal";
       ?>

        <script>

            Swal.fire({
                icon: 'error',
                title: '',
                text: 'Los campos no pueden estar vacios',
                footer: ''
            })
        </script>
        <?php
    } else {

        
        // valido si los datos ingresados en el logín coinciden con los datos en la base de datos
        // en caso de coincidir se redirigirá hacía su respectiva vista
        $nombre_usuario = $_POST['nombre_usuario'];
        $id_usuario = $_POST['id_usuario'];
        $_SESSION['id_usuario'] = $id_usuario; 
        $apellido_uario = $_POST['apellido_usuario'];
        $cedula_usuario = $_POST['cedula_usuario'];
        $fecha_usuario = $_POST['fecha_nacimiento'];
        $correo_usuario = $_POST['correo_usuario'];
        $telefono_usuario = $_POST['telefono_usuario'];
        $cargo_usuario = $_POST['cargo_usuario'];
        //
        $sql = $conexion->query("UPDATE empleado SET  nombre = '$nombre_usuario', apellido = '$apellido_usuario', cedula = $cedula_usuario, telefono = $telefono_usuario, correo = '$correo_usuario',cargo = '$correo_usuario' WHERE id_empleado = $id_usuario");


        
        if($sql == true) {

            //guardar los datos para mostarar los en la vista 

            echo "actualización correcta";



        } else {

            ?>

            <script>
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'La contraseña o el suario son incorrectos',
                    footer: ''
                })
            </script>
            <?php
        }



    }
}

?>