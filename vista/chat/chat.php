<?php
include "../../modelo/conexion_bd.php";
$consulta = "SELECT * FROM chat ORDER BY id DESC ";
$ejecutar = $conexion->query($consulta);
while ($filas = $ejecutar->fetch_array()) :

?>
    <div id="datos-chat">



        <span style="color: #1c62c4"><?php echo $filas['nombre']; ?>: </span>
        <span style="color: #10100E"><?php echo $filas['mensaje']; ?></span> </span>
        <span style="float: right;"><?php echo formatearfecha($filas['fecha']); ?></span>


    </div>
<?php endwhile; ?>

<?php
function formatearfecha($fecha)
{

    return date('g:i a', strtotime($fecha));
}

?>