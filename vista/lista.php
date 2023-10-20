<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../vista/css/lista.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
        <h1 class="navbar-brand text-info fw-semibold fs-4">LOGICAL</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
                
            </button>
            
            <!-- SIDEVAR -->
            <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1" >

                <div class="canvas-header d-lg-none" data-bs-theme="dark" >
                    <h5 class="offcanvas-title text-info">cerrar</h5>

                    <!-- boton para pantallas pequeñas -->
                    <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas">

                    </button>
                </div>
                <!-- ENLANCES DEL NAVBAR -->
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">
                        <li class="nav-item p-3 py-md-1"><a href="" class="nav-link">HOME</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="" class="nav-link">PROYECT</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="../vista/inicio" class="nav-link">VOLVER</a></li>
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


    <div class="titulo">
        <H3>ASISTENCIA DE EMPLEADOS</H3>
    </div>

    <!-- capturar datos session -->

    <?php 

    include_once("../modelo/conexion_bd.php");

    $sql=$conexion->query("SELECT DISTINCT asistencia.id_asistencia,asistencia.id_empleado,asistencia.empresa,asistencia.hora_entrada,asistencia.hora_salida,
    empleado.id_empleado,empleado.nombre,empleado.apellido,empleado.cedula,cargo.id_cargo,cargo.cargo
    FROM asistencia
    INNER JOIN empleado ON asistencia.id_empleado = empleado.id_empleado
    INNER JOIN cargo ON empleado.cargo = cargo.cargo;
    ")
     ?>

    <!-- INICIO TABLAS  -->
    <div class="tablas">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Empleado</th>
      <th scope="col">Cedula</th>
      <th scope="col">Cargo</th>
      <th scope="col">Entrada</th>
      <th scope="col">Salida</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    while($datos = $sql->fetch_object()){?>
        <tr>
        <td><?= $datos->id_asistencia?></td>
        <td><?= $datos->nombre." ".$datos->apellido?></td>
        <td><?= $datos->cedula?></td>
        <td><?= $datos->cargo?></td>
        <td><?= $datos->hora_entrada?></td>
        <td><?= $datos->hora_salida?></td>
        <td><i class="fa-sharp fa-solid fa-trash"></i></td>        
        </tr>
    
    <?php }
    ?>
    
  </tbody>
</table>
    </div>

    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
</body>

</html>