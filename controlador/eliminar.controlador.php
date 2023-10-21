<?php

//validamos que el id no este vacio, si es así ejecutar una consulta de eliminar para las asistencias
//a las que se les seleccione
if (!empty($_GET['id'])) {

    $id = $_GET['id'];
    $sql = $conexion->query("DELETE FROM asistencia WHERE id_asistencia =$id");
    if ($sql == true) { 

        echo "<div class='alert alert-success' role='alert'>ASISTENCIA ELIMINADA CORRECTAMENTE</div>"; 
     } else { 
        echo "<div class='alert alert-danger' role='alert'></ERROR AL ELIMINAR LA ASISTENCIA";
      }?>

        <!---validamos para que la variable de la url se "elimine"--->
      <script>
        setTimeout(() => {
           window.history.replaceState(null,null,window.location.pathname) 
        }, 0);
      </script>

<?php }

?>