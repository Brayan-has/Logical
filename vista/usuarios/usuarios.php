<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vista/css/inicio.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../vista/css/lateral.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <h1 class="navbar-brand text-info fw-semibold fs-4">LOGICAL</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            session_start();

            ?>



            <script>
                function salirUsuario() {




                    var not = confirm("¿¿ESTÁS SEGURO O SEGURA QUE DESEA CERRAR SESIÓN??");
                    return not;
                }
            </script>

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
                        <li class="nav-item p-3 py-md-1"><a href="../../vista/lista" class="nav-link">TAREA SEMANA</a>
                        </li>
                        <li class="nav-item p-3 py-md-1"><a href="../../vista/salario" class="nav-link">SALARIO</a></li>


                      

                        <li class='nav-item p-3 py-md-1'><a href='../../vista/chat/index1' class='nav-link'>NOVEDADES</a>
                        </li>


                        < <li class="nav-item p-3 py-md-1"><a href="../../controlador/salir.controlador"
                                class="nav-link" onclick="return salirUsuario()">SALIR</a></li>
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




    <h1 id="ingreso">BIENVENIDO A LOGICAL</h1>




    <div class="user">
        <!-- si estos datos están vacios el usario no está logeado y no podrá ingresar a su apartado -->
        <?php
        // session_start();
        if (empty($_SESSION["nombre"]) and empty($_SESSION["apellido"])) {
            header("location: ../../vista/login");
        }

        ?>
    </div>


    <div class="usuario">
        <?= $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>
    </div>
    <div class="cargo">
        <?= $_SESSION['cargo'] ?>
    </div>


    <!-- FINAL DE NAVBAR -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>