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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

</head>

<body>
    <?php include("../controlador/validar.controlador.php");?>

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



                <script>
                    function salir() {

                        var not = confirm("¿¿ESTÁS SEGURO O SEGURA QUE DESEA CERRAR SESIÓN??");
                        return not;
                    }
                </script>


                <!-- FINAL DE CERRAR SESIÓN -->
                <!-- ENLANCES DEL NAVBAR -->
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">
                        <li class="nav-item p-3 py-md-1"><a href="../vista/lista" class="nav-link">TAREA SEMANA</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="../vista/salario" class="nav-link">SALARIO</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="../vista/registro/actualizar" class="nav-link">ACTUALIZAR DATOS</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="" class="nav-link">EMPLEADOS</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="../controlador/salir.controlador" class="nav-link"
                                onclick="return salir()">SALIR</a></li>
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
    // session_start();
    if (empty($_SESSION["nombre"]) and empty($_SESSION["apellido"])) {
        header("location: ../vista/login");
    }

    ?>


    <h1 class="ingreso">BIENVENIDO A LOGICAL</h1>



    <!-- FOTO -->
    <!-- <div id="lateral">

      
        </div> -->
    <div class="cargo">
        <?= $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>
    </div>

    <!-- nombre y apellido -->




    <div class="cargo-superior">

        <div class="cargo">
            <?= $_SESSION['cargo'] ?>
        </div>
    </div>







    <!--  -->




        <!-- Sección para formulario de las tareas -->

        <?php include_once "../controlador/administrador/tareas.controlador.php" ?>

        <div class="container-fluid" id="agregar">
            <h1>Ingresa los datos para agregar a un ususario a 'TAREA SEMANA' </h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Id de usuario</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Ejemplo: 10" name="id_empleado">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Empresa</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ejemplo: Exito"
                        name="empresa">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hora de entrada</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ejemplo: 9:00 am"
                        name="entrada">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hora de salida</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ejemplo: 5:20 pm"
                        name="salida">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jornada</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ejemplo: Diurno"
                        name="jornada">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Area</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Ejemplo: Almacenamiento" name="area">
                </div>
                <input type="submit" class="btn btn-primary" name="tarea">Registrar tarea</input>
            </form>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</footer>

</html>