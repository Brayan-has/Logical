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
                        <li class="nav-item p-3 py-md-1"><a href="../../vista/inicio" class="nav-link">VOLVER</a></li>
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



    </div>



    <?php include_once "../../controlador/administrador/actualizar.controlador.php"; ?>



    <div class="padre">

        <div class="container-fluid">
            <h1>Buscar usuarios</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del empleado</label>
                    <input type="mail" name="buscar" class="form-control" id="exampleInputEmail1"
                        placeholder="Ejemplo: Andres123@gmail.com">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="container mt-4" id="ca">

            <table id="tabla" class="table table-striped display responsive nowrap" style="width:100%">
                <thead>
                    <th scope="row" scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">cedula</th>
                    <th scope="col">correo</th>
                    <th scope="col">cargo</th>
                </thead>

                <tbody id="content">

                    <?php

                    include_once "../../controlador/administrador/admin.controlador.php"
                    ?>

                </tbody>

            </table>


        </div>

        <div class="container mt-4" id="scroll">


            <h4>Editar</h4>

            <?php
                ?>
                <form action="" method="POST">
                    <div class="form-group">

                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="id del empleado"
                            name="id-usuario">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nombre"
                            name="nombre-usuario">

                    </div>
                    <div class="form-group">

                        <div>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="apellido"
                                name="apellido-usuario">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cedula"
                                name="cedula-usuario">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="fecha"
                                name="fecha-nacimiento">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="correo"
                                name="correo-usuario">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="telefono"
                                name="telefono-usuario">
                        </div>
                        <div>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cargo"
                                name="cargo-usuario">
                        </div>


                    </div>

                    <input type="submit" class="btn btn-primary" name="actualizar">Actualizar</input>
                </form>
                <?php
            
            ?>

        </div>
        <!-- actualizar datos -->

        <!-- agregar usuario nuevo -->
        <div class="container mt-4">

            <h4>Actualizar salario de empleado</h4>

            <form action="" method="POST">

                <div class="form-group">

                    <div>
                        <!-- id del empleado / id_salario -->
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="id del usuario ejemplo: 4" name="id">
                    </div>
                    <div>
                        <!-- horas_cantidad -->
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Cantidad hora extra ejemplo: 3" name="cantidad">
                    </div>
                    <div>
                        <!-- horas_valor -->
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Valor de hora ejemplo: 3600.000" name="valor">
                    </div>
                    <div>
                        <!-- salario del empleado -->
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Salario ejemplo: 1160.000" name="salario">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" name="salario_boton">Registrar salario</input>
            </form>

        </div>



</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</footer>

</html>