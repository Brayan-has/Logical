<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./css/error.css">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <h1 class="navbar-brand text-info fw-semibold fs-4">LOGICAL</h1>


            <!-- SIDEVAR -->
            <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1">
                <!-- ENLANCES DEL NAVBAR -->
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">


                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="nav-item p-3 py-md-1"><a href="../vista/view" class="nav-link">INICIO</a></li>


                    </ul>

                </div>
            </section>
        </div>

    </nav>

    <?php
    include("../modelo/conexion_bd.php");
    include("../controlador/validar.controlador.php");

    ?>






    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">

                <!--formulario-->
                <form action="" method="POST">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">INICIAR SESIÓN</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese su Usuario"
                            id="usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" name="contrasena"
                            placeholder="Ingrese su Contraseña" id="contrasena">
                    </div>

                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-block ingresar" value="INGRESAR" name="ingresar"
                            >
                    </div>
                    <!-- <div class="form-group mx-sm-4 text-right">
                        <span class=""><a href="./vista/recuperar/recuperar.php" class="olvide">Olvide mi contraseña</a></span>
                    </div> -->
                    <div class="form-group text-center">
                        <span><a href="../vista/registro/registro" class="olvide1">CREAR CUENTA</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>