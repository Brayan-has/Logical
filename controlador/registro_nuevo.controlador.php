<?php

// include("../../modelo/conexion_bd.php");

if(!empty($_POST['confirmar'])){

$confirmar_id = $_POST['confirmar-id'];
$confirmar_cargo = $_POST['confirmar-dato'];


$sql = $conexion->query("INSERT INTO cargo (id_cargo,cargo) 
VALUES ($confirmar_id,'$confirmar_cargo')");
  if ($sql == true) { ?>


      <script>
          Swal.fire(
              '¡USUARIO REGISTRADO CORRECTAMENTE! :)',
              '',
              'success'
          )
      </script>


  <?php } else { ?>



      <script>
          Swal.fire({
              icon: 'error',
              title: '',
              text: 'PROCESO FALLIDO :(',
              footer: ''
          })
      </script>
  <?php }

        }
?>