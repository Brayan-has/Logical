<?php
// accedp a la base de datos
include("../../modelo/conexion_bd.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vista/css/inicio.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../vista/css/lateral.css">
    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <h1 class="navbar-brand text-info fw-semibold fs-4">LOGICAL</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- SIDEVAR -->
            <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1">

                <div class="canvas-header d-lg-none" data-bs-theme="dark">
                    <h5 class="offcanvas-title text-info">cerrar</h5>

                    <!-- boton para pantallas pequeñas -->
                    <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas">

                    </button>
                </div>
                <!-- ENLANCES DEL NAVBAR -->
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">

                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="nav-item p-3 py-md-1"><a href="../../vista/lista" class="nav-link">VOLVER</a></li>
                    </ul>
                    <div class="d-lg-none align-self-center py-3 text-info fs-2">
                        <a href="" class="bi bi-hi"><i class="bi bi-github"></i></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                    </div>
                </div>
            </section>
        </div>

    </nav>

    <?php


    // valido si le id que se envió por get existe
// de no ser así redirigir hacía la lista de usuarios
    if (empty($_GET["id"])) {
        header("location: ../../vista/lista");
    }
    $id_user = $_GET["id"];

    // creo la consulta para obtner los datos del usuario
    $sql = mysqli_query($conexion, "SELECT e.id_empleado,e.contrasena,e.correo,e.nombre,e.apellido,e.cedula,e.fecha_nacimiento,e.telefono,c.cargo,e.cargo FROM empleado e
INNER JOIN cargo c 
on e.cargo = c.cargo
WHERE id_empleado = $id_user");

    // enumero los datos de la tabla en la base de datos
// y valido para que sus resultados solo sean de 1 en adelante
// en caso de ser 0 redirigir hacía la lista.
    $result = mysqli_num_rows($sql);

    if ($result > 0) {


        while ($data = mysqli_fetch_array($sql)) {
            $id = $data["id_empleado"];
            $nombre = $data["nombre"];
            $apellido = $data["apellido"];
            $correo = $data["correo"];
            $cedula = $data["cedula"];
            $fecha_nacimiento = $data["fecha_nacimiento"];
            $telefono = $data["telefono"];
            $cargo = $data["cargo"];
            $clave = $data["contrasena"];
        }

    } else {
        header("location: ../../vista/lista");

    }

    ?>

    <!-- validamos  -->
    <?php

    if (!empty($_POST)) {

        $alert = '';

        if (empty($_POST['idUsuario']) or empty($_POST['nombreUsuario']) or empty($_POST['apellidoUsuario']) or empty($_POST['cedulaUsuario']) or empty($_POST['fechaNacimiento']) or empty($_POST['correoUsuario']) or empty($_POST['telefonoUsuario']) or empty($_POST['cargoUsuario'])) { ?>


            <script>
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Los campos no pueden estar vacios :(',
                    footer: ''
                })
            </script>';
        <?php } else {

           

            $nombre = $_POST['nombreUsuario'];
            $appellido_usuario = $_POST['apellidoUsuario'];
            $cedula = $_POST['cedulaUsuario'];
            $nacimiento = $_POST['fechaNacimiento'];
            $correo = $_POST['correoUsuario'];
            $telefono = $_POST['telefonoUsuario'];
            $cargo = $_POST['cargoUsuario'];
            $clave = md5($_POST['claveUsuario']);

            $query_select = mysqli_query($conexion, "SELECT * FROM empleado WHERE nombre ='$nombre' AND id_empleado != $id");


            $result = mysqli_fetch_array($query_select);

            if ($result > 0) {
                $alert = '<p class="msg_error">El correo o el usuairo ya existe</p>';
            } else {

                if (empty($_POST['clave'])) {

                    $sql_update = mysqli_query($conexion, "UPDATE empleado
                SET nombre = '$nombre',apellido = ' $appellido_usuario', cedula = $cedula, fecha_nacimiento = '$nacimiento', correo = '$correo', telefono = $telefono, cargo = '$cargo' WHERE id_empleado = $id");
                } else {

                    $sql_update = mysqli_query($conexion, "UPDATE empleado
                SET nombre = '$nombre',apellido = ' $appellido_usuario', cedula = $cedula, fecha_nacimiento = '$nacimiento', correo = '$correo', telefono = $telefono, cargo = '$cargo' contrasena = '$clave' WHERE id_empleado = $id");

                }

                // $query_insert = mysqli_query($conexion,"INSERT INTO empleado(nombre,apellido,cedula,fecha_nacimiento,correo,telefono,cargo) VALUES ('$nombre','$apellido',$cedula,$fechaNacimiento,'$correo',$telefono,'$cargo'");
                if ($sql_update) {
                    ?>

                    <script>
                        Swal.fire(
                            '¡Usuario editado correctamente! :)',
                            '',
                            'success'
                        )
                    </script>
                    <?php
                } else {
                    $alert = '<p class="msg_error">Error al actualizar el usuario</p>';

                }
            }
        }
    } else {

        
    }
    ?>




    <!-- FINAL DE NAVBAR -->

    <div class="container mt-4">


        <h4>Editar</h4>

        <?php


        ?>
        <form action="" method="POST">
            <div class="form-group">

                <input type="hidden" class="form-control" id="exampleInputPassword1" placeholder="id del empleado"
                    name="idUsuario" value="<?= $id ?>">

            </div>
            <div class="form-group">
                <label for="nombreUsuario">Nombre completo</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nombre"
                    name="nombreUsuario" value="<?= $nombre ?>">

            </div>
            <div class="form-group">

                <div>
                    <label for="apellidoUsuario">Apellido completo</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="apellido"
                        name="apellidoUsuario" value="<?= $apellido ?>">
                </div>
                <div>
                    <label for="cedulaUsuario">Cedula de ciudadania</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cedula"
                        name="cedulaUsuario" value="<?= $cedula ?>">
                </div>
                <div>
                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="fecha"
                        name="fechaNacimiento" value="<?= $fecha_nacimiento ?>">
                </div>
                <div>
                    <label for="correoUsuario">Correo electronico</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="correo"
                        name="correoUsuario" value="<?= $correo ?>">
                </div>
                <div>
                    <label for="telefonoUsuario">Telefono personal</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="telefono"
                        name="telefonoUsuario" value="<?= $telefono ?>">
                </div>
                <div>
                    <label for="cargoUsuario">Cargo del empleado</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cargo"
                        name="cargoUsuario" value="<?= $cargo ?>">
                </div>
                <div>
                    <label for="claveUsuario">Contraseña</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="contrasena"
                        name="claveUsuario" value="<?= $clave ?>">
                </div>


            </div>

            <button type="submit" class="btn btn-primary" onclick="actualizar()" name="actualizar"
                id="actualizar">Actualizar</button>
        </form>


    </div>
    <!-- actualizar datos -->
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="../../vista/assets/plugins/sweet alert/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</footer>

</html>