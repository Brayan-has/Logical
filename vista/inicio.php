<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical</title>
    <link rel="stylesheet" href="../vista/css/inicio.css">
</head>
<body>

    <p>BIENVENIDO A LOGICAL</p>
    <h1 id="ingreso">BIENVENIDO A LOGICAL</h1>

    <div class="user">

    <!-- capturar nomrbe apellido -->
    <?php
        session_start();
        if(empty($_SESSION["nombre"]) and empty($_SESSION["apellido"])){
            header("location: ../vista/login.php");
        }
    
    ?>
        

    </div>
    
    <h3 id="fecha"></h3>

        <div>
            <a href="../controlador/salir.controlador.php">SALIR</a>   
            
        </div>


    <!---ingresar al---> 
    <div><?= $_SESSION['nombre'] ." ".$_SESSION['apellido'] ?></div>
    <div class="container">
        <a href="">Ingresar al sistema</a>
        <p class="cedula">Ingrese su Cedula</p>
        <form action="">
            <input type="text" name="textCedula" placeholder="cedula del empleado">
            <div class="botones">
                <a href="" class="entrada">ENTRADA</a>
                <a href="" class="salida">SALIDA</a>
            </div>
        </form>
    </div>


 <script>
    //creación de hora en tiempo real
    //set interval: intervalos
    setInterval(() => {
        let fecha = new Date();
        let fechaHora = fecha.toLocaleString();
        document.getElementById("fecha").textContent=fechaHora; 
    }, 1000);

 </script>
</body>
</html>