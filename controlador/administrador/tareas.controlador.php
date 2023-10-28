<?php
// include_once("../../modelo/conexion_bd.php");
//validar si se ha presionado el boton de REGISTRAR
if (!empty($_POST["tarea"])) {


    if (empty($_POST["id_empleado"]) or empty($_POST["empresa"]) or empty($_POST["entrada"]) or empty($_POST["salida"]) or empty($_POST["jornada"]) or empty($_POST["area"])) {
        ?>

        <!-- sweet alert para una interfaz de alerta visualmente amigable -->
        <script>

            Swal.fire({
                icon: 'error',
                title: '',
                text: 'Los campos no pueden estar vacios',
                footer: ''
            })
        </script>
        <?php
    } else {

        //capturamos cada dato del usuario

        $id_empleado = $_POST["id_empleado"];
        $empresa = $_POST["empresa"];
        $hora_entrada = $_POST["entrada"];
        $hora_salida = $_POST["salida"];
        $jornada = $_POST["jornada"];
        // $_SESSION['J'] = $jornada;
        $cargos = $_SESSION['cargo'];
        $area = $_SESSION['area'];


        //se insertan los datos capturados a la tablas asistencia
        $sql_insert = $conexion->query("INSERT INTO asistencia (empresa,hora_entrada,hora_salida,id_empleado,id_asistencia,jornada,area) VALUES ('$empresa','$hora_entrada','$hora_salida',$id_empleado,$id_empleado,'$jornada','$area');");

        // 
        $sql_cargo = $conexion->query("INSERT INTO cargo (id_cargo,cargo) VALUES ($id_empleado,'$cargos')");


        //en caso de devolver un valor verdadero 
        //mostrar un sweet alert de registro correcto de tarea, mostrar que no fue posible en caso contrario
        if ($sql_insert == true) { ?>


            <script>
                Swal.fire(
                    '!TAREA REGISTRADO CORRECTAMENTE!',
                    '',
                    'success'
                )
            </script>

        <?php } else { ?>

            <script>
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'NO SE PUDO REGISTRAR LA TAREA',
                    footer: ''
                })
            </script>

        <?php }



    }

}

?>