<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@600&display=swap" rel="stylesheet">

    <script type="text/javascript">
        function ajax() {
            var req = new XMLHttpRequest();

            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }

            req.open('GET', 'chat.php', true);
            req.send();
        }
        // linea que refresca la paguina cada segundo
        setInterval(function(){ajax();}, 1000);
    </script>
</head>
<?php
include "../../modelo/conexion_bd.php";

function formatearfecha($fecha)
{

    return date('g:i a', strtotime($fecha));
}


?>

<body onload="ajax();">
    <div id="contenedor">

        <div id="caja-chat">
            <div id="chat"></div>
        </div>
        <form method="POST" action="index1.php">
            <input type="text" name="nombre" placeholder="ingresa tu nombre">
            <textarea name="mensaje" placeholder="ingresa tu nombre"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php

        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $mensaje = $_POST['mensaje'];
            $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
            $ejecutar = $conexion->query($consulta);

            if ($ejecutar) {
                echo "<embed loop='false' src='iphone.mp3' hidden='true' autoplay='true'> ";
            }
        }


        ?>

    </div>

</body>

</html>