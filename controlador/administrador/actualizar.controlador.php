<?php

include("../../modelo/conexion_bd.php");


if (!empty($_POST["enviar"])){
    
    if (!empty($_POST['nombre-usuario']) or !empty($_POST['apellido-usuario']) or !empty($_POST['cedula-usuario']) or !empty($_POST['fecha-nacimiento']) or !empty($_POST['correo-usuario']) or !empty($_POST['cargo-usuario']) or !empty($_POST['telefono-usuario'])) {
        
        $nombreUsuario = $_POST['nombre-usuario'];
        $apellidoUsuario = $_POST['apellido-usuario'];
        $usuarioUsuario = $_POST['cedula-usuario'];
        $fechaUsuario = $_POST['fecha-nacimiento'];
        $correoUsuario = $_POST['correo-usuario'];
        $cargoUsuario = $_POST['cargo-usuario'];
        $telefonoUsuario = $_POST['telefono-usuario'];
        
        $sql = $conexion->query("UPDATE SET nombre='$nombreUsuario', apellido='$apellidoUsuario', cedula='$cedulaUsuario','$fechaUsuario','$correoUsuario','$telefonoUsuario' WHERE id_empleado = $id" );

        // if ($sql->fetch_object()->) {
        //     # code...
        // } else {
        //     # code...
        // }
        

    }else{

        ?>
            
        <script>
            Swal.fire({
                icon: 'error',
                title: '',
                text: 'LOS CAMPOS NO PUEDEN ESTAR VACIOS',
                footer: ''
            })
        </script>
     

        <?php


    }

}
?>