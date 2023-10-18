<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <H1>REGISTRESE A LOGICAL</H1>

        
        <form action="" method="POST">
            <?php
                include("../../modelo/conexion_bd.php");
                include("../../controlador/registro.controlador.php");
            ?>
            <div>
                <input type="text" name="nombre" placeholder="nombres completos">
            </div>
            <div>
                <input type="text" name="apellido" placeholder="apellidos completos">
            </div>
            <div>
                <label for="nacimiento">año-mes-dia: ejemplo: 2010-08-20</label>
                <input type="text" name="nacimiento" placeholder="fecha de nacimiento">
            </div>
            <div>
                <input type="number" name="cedula" placeholder="Cedula de ciudadania">
            </div>
            <div>
                <input type="number" name="telefono" placeholder="Número de teléfono">
            </div>
            <div>
                <input type="email" name="correo" placeholder="Correo electrónico">
            </div>
            <div>
                <input type="password" name="contrasena" placeholder="Contrasena">
            </div>
            <div>
                <input type="submit" value="REGISTRARSE" name="registro">
            </div>
        </form>
        <a href="../../vista/login.php">INGRESAR</a>
    
    </body>
</html>