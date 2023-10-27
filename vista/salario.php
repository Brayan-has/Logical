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
    <link rel="stylesheet" href="../vista/css/lateral.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

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
                        <?php
                        session_start();

                        include("../controlador/validar.controlador.php");






                        if ($_SESSION['cargo'] == "Supervisor" or $_SESSION['cargo'] == "Administrador") {
                            echo "<li class='nav-item p-3 py-md-1'>" . "<a href='../vista/inicio'
                                class='nav-link'>VOLVER</a></li>";
                        } else {
                            echo "<li class='nav-item p-3 py-md-1'><a href='../vista/usuarios/usuarios'
                                class='nav-link'>VOLVER</a></li>";
                        }
                        ?>
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
    <!-- FINAL DE NAVBAR -->

    <div class="container mt-4">

        <!--data table  -->
        <table id="tabla" class="table table-striped display responsive nowrap" style="width:100%">
            <thead>
                <tr>

                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">salario</th>
                    <th scope="col">horas extras</th>
                    <th scope="col">valor hora</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>
                        <?= $_SESSION['nombre'] ?>
                    </td>
                    <td>
                        <?= $_SESSION['apellido'] ?>
                    </td>
                    <td>
                        <?= $_SESSION['cargo'] ?>
                    </td>
                    <td>
                        <?= $_SESSION['salario'];
                        echo "$" ?>
                    </td>
                    <td>
                        <?= $_SESSION['horas_cantidad'] ?>
                    </td>
                    <td>
                        <?= $_SESSION['horas_valor'] ?>
                    </td>

                </tr>


            </tbody>

        </table>
        <!-- end data table -->

    </div>




</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</footer>

</html>