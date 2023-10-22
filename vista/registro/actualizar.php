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

    <h4>Actualizar datos</h4>

    <?php include_once "../../controlador/administrador/actualizar.controlador.php";?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre-usuario" aria-describedby="emailHelp"
                placeholder="Enter email" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="apellido-usuario" placeholder="ejemplo:" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cedula</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="cedula-usuario" aria-describedby="emailHelp"
                placeholder="Enter email" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="fecha-nacimiento" placeholder="ejemplo:" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="text" class="form-control" id="exampleInputEmail1"  name="correo-usuario" aria-describedby="emailHelp"
                placeholder="Enter email" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cargo</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cargo-usuario" placeholder="ejemplo:" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Teléfono</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="telefono-usuario" aria-describedby="emailHelp"
                placeholder="Enter email" value="" >
        </div>
       
        <input type="submit" class="btn btn-primary" name="enviar" value="Actualizar">Actualizar</input>

    </form>
  

    <div class="formularioUno">
    </div>

    <h4>Eliminar Usuario</h4>


    <div class="formulario1">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ejemplo:">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
          
            <input type="submit" class="btn btn-primary">Eliminar</input>
        </form>
    </div>

    <div class="contenido">





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>