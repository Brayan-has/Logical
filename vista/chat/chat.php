<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@600&display=swap" rel="stylesheet">
</head>
<?php
include "../../modelo/conexion_bd.php";

?>

<body>
    <div id="contenedor">

        <div id="caja-chat">
            <div id="chat">
                <?php

                    $consulta = "SELECT * FROM chat ORDER BY id DESC ";
                    $ejecutar = $conexion->query($consulta);
                    while ($filas = $ejecutar->fetch_array()):

                ?>  
                    <div id="datos-chat">



                        <span style="color: #1c62c4"><?php echo $filas['nombre']; ?>: </span>
                        <span style="color: #10100E"><?php echo $filas['mensaje']; ?></span>                                                                                             </span>
                        <span style="float: right;"><?php echo formatearfecha($filas['fecha']); ?></span>


                    </div>
                <?php endwhile; ?>

            </div>
        </div>
        <form method="POST" action="index.php">
            <input type="text" name="nombre" placeholder="ingresa tu nombre">
            <textarea name="mensaje" placeholder="ingresa tu nombre"></textarea>
            <input type="submit" name="enviar" value="enviar">
        </form>

    </div>

</body>

</html>