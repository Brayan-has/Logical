<?php

include("../../modelo/conexion_bd.php");

//en caso de que se presione el input enviar y este no esté vacio se validará si cada campo
//no está vacio y si ese es el caso envíar un mensaje de error 

if (!isset($_POST["actualizar"])) {

    if (!empty($_POST['id-usuario']) or !empty($_POST['nombre-usuario']) or !empty($_POST['apellido-usuario']) or !empty($_POST['cedula-usuario']) or !empty($_POST['fecha-nacimiento']) or !empty($_POST['correo-usuario']) or !empty($_POST['cargo-usuario']) or !empty($_POST['telefono-usuario'])) {

        $id = $_POST['id-usuario'];
        $nombreUsuario = $_POST['nombre-usuario'];
        $apellidoUsuario = $_POST['apellido-usuario'];
        $cedulaUsuario = $_POST['cedula-usuario'];
        $fechaUsuario = $_POST['fecha-nacimiento'];
        $correoUsuario = $_POST['correo-usuario'];
        $cargoUsuario = $_POST['cargo-usuario'];
        $telefonoUsuario = $_POST['telefono-usuario'];

        $sql = $conexion->query("UPDATE empleado SET nombre='$nombreUsuario', apellido='$apellidoUsuario', cedula='$cedulaUsuario',fecha_nacimiento='$fechaUsuario',correo='$correoUsuario',telefono='$telefonoUsuario' WHERE id_empleado = $id");

        if($sql == true){

            ?>


            <script>
                Swal.fire(
                    '¡Empleado actualizado correctamente! :)',
                    '',
                    'success'
                )
            </script>


        <?php 
        }else{

            ?>

            <script>
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'No fue posible actualizar el empleado',
                    footer: ''
                })
            </script>
    
    
            <?php
        }


    } else {

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


// Funciones para el formulario de salario













