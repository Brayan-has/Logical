<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../vista/css/registro.css">
    <link rel="stylesheet" href="../../vista/css/lateral.css">
</head>

<body>


    <!---COMIENZO DEL NAVBAR-->

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
                <!-- PREGUNTAR AL USUARIO SI DESEA CERRAR SESIÓN -->


<!-- FINAL DE CERRAR SESIÓN -->
                <!-- ENLANCES DEL NAVBAR -->
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">

                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class="nav-item p-3 py-md-1"><a href="../../vista/login" class="nav-link">INGRESAR</a></li>

                    </ul>
                  
                </div>
            </section>
        </div>

    </nav>
        <!---FINAL DEL NAVBAR-->


    </nav>



    <H1>REGISTRESE A LOGICAL</H1>

    <div class="container" class="dropdown-menu">

        <form action="" method="POST">
            <?php
            include("../../modelo/conexion_bd.php");
            include("../../controlador/registro_nuevo.controlador.php");
            ?>
            <div class="container">

                <input class="form-control form-control-sm ml-5 mb-4" type="text" name="confirmar-id"
                    placeholder="Confirmar id de usuario para poder registrar">
            </div>
            <div class="container" class="form-control px-3 ">

                <input class="form-control form-control-sm mb-4" type="text" name="confirmar-dato"
                    placeholder="Confirmar cargo">
            </div>
            <input class="form-control form-control-sm mb-4" type="submit" value="REGISTRARSE" name="confirmar"
                id="registro">
        </form>

    </div>





</body>

<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</footer>