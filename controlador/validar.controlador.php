<?php


<<<<<<< HEAD
if(!empty("ingresar")){

    if(empty($_POST["usuario"]) or empty($_POST["contrasena"]) ){
        echo "<div alert alert-danger>UN CAMPO O TODOS LOS CAMPOS ESTÁN VACIOS</div>";
    }else
    {
=======
session_start();



//validar los campos del login básico
if (!empty("ingresar")) {

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
>>>>>>> 5d98e49f600699f20ab04559ac530657c80690a0
        $usuario = $_POST['usuario'];
        $contrasena = md5($_POST['contrasena']);
        //
        $sql = $conexion->query("SELECT * FROM empleado WHERE correo = '$usuario' AND contrasena = '$contrasena'");
<<<<<<< HEAD
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo "<div alert alert-danger>EL USUARIO NO EXISTE</div>";
=======
        $datos = $sql->fetch_object();
        if ($datos) {
            $_SESSION['nombre'] = $datos->nombre;
            $_SESSION['apellido'] = $datos->apellido;
            $_SESSION['cargo'] = $datos->cargo; //guardar los datos para mostarar los en la vista 
            $_SESSION['id'] = $datos->id_empleado;
            $_SESSION['correo'] = $datos->correo;
            $_SESSION['cedula'] = $datos->cedula;
            
            
            //de inicio
            if ($datos->cargo == "Supervisor" || $datos->cargo == "Administrador"
                || $datos->cargo == "Supervisora" || $datos->cargo == "Administradora"
            ) {
                header("location:inicio");
            } else {
                header("location:usuarios/usuarios");
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
>>>>>>> 5d98e49f600699f20ab04559ac530657c80690a0
        }

    }
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 5d98e49f600699f20ab04559ac530657c80690a0
