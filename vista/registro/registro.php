<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logical</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../vista/css/registro.css">
</head>

<body>

  <!---COMIENZO DEL NAVBAR-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
      <h1 class="navbar-brand text-info fw-semibold fs-4">LOGICAL</h1>

      <!---<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
    <span class="navbar-toggler-icon"></span>

  </button> -->




      <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1">
        <!-- ENLANCES DEL NAVBAR -->
        <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
          <ul class="navbar-nav fs-5 justify-content-evenly">
            <!-- <li class="nav-item p-3 py-md-1"><a href="" class="nav-link">HOME</a></li> -->
            <!-- <li class="nav-item p-3 py-md-1"><a href="" class="nav-link">SOBRE LOGICAL</a></li> -->
            <li class="nav-item p-3 py-md-1"><a href="../../vista/login" class="nav-link">INGRESAR</a></li>
          </ul>

        </div>
      </section>
    </div>
    <!---FINAL DEL NAVBAR-->


  </nav>
  <H1>REGISTRESE A LOGICAL</H1>

  <div class="container" class="dropdown-menu">

    <form action="" method="POST">
      <?php
      include("../../modelo/conexion_bd.php");
      include("../../controlador/registro.controlador.php");
      ?>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm ml-5" required type="text" name="nombre" placeholder="nombres completos">
      </div>
      <div class="container" class="form-control px-3">
        <label></label>
        <input class="form-control form-control-sm" required type="text" name="apellido" placeholder="apellidos completos">
      </div>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm" required type="text" name="nacimiento"
          placeholder="año-mes-dia: ejemplo: 2010-08-20">
      </div>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm" required type="number" name="cedula" placeholder="Cedula de ciudadania">
      </div>
      <div class="container">
        <label for=""></label>
        <input class="form-control form-control-sm" required class="form-control space-right" type="text" name="cargo"
          placeholder="Cargo: ejemplo Administrador">
      </div>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm" required type="number" name="telefono" placeholder="Número de teléfono">
      </div>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm" required type="email" name="correo" placeholder="Correo electrónico">
      </div>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm" required type="password" name="contrasena" placeholder="Contrasena">
      </div>
      <div class="container">
        <label></label>
        <input class="form-control form-control-sm" required type="submit" value="REGISTRARSE" name="registro" id="registro">
      </div>
    </form>
  </div>
  <!-- <a href="../../vista/login.php">INGRESAR</a> -->
  <!-- FINAL DEL FORMULARIO DE REGISTRO -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>