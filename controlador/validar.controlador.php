<?php


session_start();


// 

include("../modelo/conexion_bd.php");



//validar los campos del login básico
if (!empty($_POST["ingresar"])) {

    if (empty($_POST["usuario"]) or empty($_POST["contrasena"])) {
        ?>

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
        $usuario = $_POST['usuario'];
        $contrasena = md5($_POST['contrasena']);
        //
        $sql = $conexion->query("SELECT * FROM empleado,asistencia WHERE correo = '$usuario' AND contrasena = '$contrasena'");
        $datos = $sql->fetch_object();
        if ($datos) {

            //guardar los datos para mostarar los en la vista 

            $_SESSION['nombre'] = $datos->nombre;
            $_SESSION['apellido'] = $datos->apellido;
            $_SESSION['cargo'] = $datos->cargo;
            $_SESSION['id'] = $datos->id_empleado;
            $_SESSION['correo'] = $datos->correo;
            $_SESSION['cedula'] = $datos->cedula;
            $_SESSION['salario'] = $datos->salario;
            $_SESSION['jornada'] = $datos->jornada;
            $_SESSION['area'] = $datos->area;
            $_SESSION['hora_cantidad'] = $datos->hora_cantidad;
            $_SESSION['hora_valor'] = $datos->hora_valor;




            //de inicio
            if ($datos->cargo == "Supervisor" || $datos->cargo == "Administrador" || $datos->cargo == "Supervisora" || $datos->cargo == "Administradora") {

                header("location: ../vista/inicio");

            } else {
                header("location: usuarios/usuarios");
            }


        } else {

            ?>

            <script>
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'La contraseña o el suario son incorrectos',
                    footer: ''
                })
            </script>
            <?php
        }

        // $sql = $conexion->query("SELECT * FROM empleado,asistencia WHERE correo = '$usuario' AND contrasena = '$contrasena'");
        // $datos = $sql->fetch_object();

    }
}

?>