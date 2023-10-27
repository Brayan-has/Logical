<?php

include("../../modelo/conexion_bd.php");

//en caso de que se presione el input enviar y este no esté vacio se validará si cada campo
//no está vacio y si ese es el caso envíar un mensaje de error 

if (!empty($_POST["enviar"])) {

    if (!empty($_POST['nombre-usuario']) or !empty($_POST['apellido-usuario']) or !empty($_POST['cedula-usuario']) or !empty($_POST['fecha-nacimiento']) or !empty($_POST['correo-usuario']) or !empty($_POST['cargo-usuario']) or !empty($_POST['telefono-usuario'])) {

        $nombreUsuario = $_POST['nombre-usuario'];
        $apellidoUsuario = $_POST['apellido-usuario'];
        $usuarioUsuario = $_POST['cedula-usuario'];
        $fechaUsuario = $_POST['fecha-nacimiento'];
        $correoUsuario = $_POST['correo-usuario'];
        $cargoUsuario = $_POST['cargo-usuario'];
        $telefonoUsuario = $_POST['telefono-usuario'];

        $sql = $conexion->query("UPDATE SET nombre='$nombreUsuario', apellido='$apellidoUsuario', cedula='$cedulaUsuario','$fechaUsuario','$correoUsuario','$telefonoUsuario' WHERE id_empleado = $id");




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




//validar que los campos esten vacios
if (!empty($_POST['salario_boton'])) {
    // valida si se presionó el botón
    if (empty($_POST['id']) or empty($_POST['cantidad']) or empty($_POST['valor']) or empty($_POST['salario'])) {


        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '',
                text: 'Los campos no pueden estar vacios :(',
                footer: ''
            })
        </script>
        <?php

} else {
    
    // obtengo los datos del formulario para insertar en la tabla
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $salario = $_POST['salario'];

        // consulta para ingresar los datos del usuario 
        $salrio_consulta = $conexion->query("INSERT INTO salario (id_salario,horas_cantidad,horas_valor,salario) VALUES ($id,$cantidad,$valor,$salario)");
        if ($salrio_consulta == true) { ?>


            <script>
                Swal.fire(
                    '¡Salario registrado correctamente! :)',
                    '',
                    'success'
                )
            </script>


        <?php } else {

            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'PROCESO FALLIDO :(',
                    footer: ''
                })
            </script>
            <?php
        }

    }


}











