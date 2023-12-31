<?php

//

session_start();


// por medio de este controlador obtendré acceso a la base de datos

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

        // valido si los datos ingresados en el logín coinciden con los datos en la base de datos
        // en caso de coincidir se redirigirá hacía su respectiva vista
        $usuario = $_POST['usuario'];

        // capturo la contraseña ingresada en el login y la encripto 
        $contrasena = md5($_POST['contrasena']);
        //
        $sql = $conexion->query("SELECT * FROM empleado,asistencia,salario WHERE correo = '$usuario' AND contrasena = '$contrasena'");
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
            $_SESSION['horas_cantidad'] = $datos->horas_cantidad;
            $_SESSION['horas_valor'] = $datos->horas_valor;
            $idSalario = $_SESSION['id'];



            //en caso de ser el usuario quien ingresa supervisor o administrador tendrán una vista diferente de los demás usuarios
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



    }
}

?>