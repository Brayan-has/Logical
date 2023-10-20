<?php
if (!empty($_GET['id'])) {

    $id = $_GET['id'];
    $sql = $conexion->query("DELETE FROM asistencia WHERE id_asistencia =$id");
    if ($sql == true) { ?>
        <script>
            $[function Notification() {
                new Pnotify({
                    title: "CORRECTO",
                    type: "SUCCESS",
                    text: "ASISTENCIA ELIMINADA CORRECTAMENTE",
                    styling: "bootstrap3"
                })
            }]
        </script>
    <?php } else { ?>
        <script>
            $[function Notification() {
                new Pnotify({
                    title: "INCORRECTO",
                    type: "ERROR",
                    text: "ERROR AL ELIMINAR",
                    styling: "bootstrap3"
                })
            }]
        </script>
    <?php }

}

?>