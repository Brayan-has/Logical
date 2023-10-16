<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./vista/loginlog/css/estilos.css">
	<link rel="stylesheet" href="./vista/loginlog/css/error.css">
    <title>INGRESO AL SISTEMA LOGISTICA</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
				<!--formulario-->
                <form action="./vista/principal/principal.php" method="post" onsubmit="return validar()">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">INICIAR SESIÓN</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese su Usuario"id="usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" name="contrasena" placeholder="Ingrese su Contraseña" id="contrasena">

						<p id="error">Por favor, completa todos los campos.</p>
                    </div>
					
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-block ingresar" value="INGRESAR" id="ingresar">
                    </div>
                    <div class="form-group mx-sm-4 text-right">
                        <span class=""><a href="#" class="olvide">Olvide mi contraseña</a></span>
                    </div>
                    <div class="form-group text-center">
                        <span><a href="" class="olvide1">REGISTRARSE</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<br>
	<?php	
<<<<<<< HEAD
	
=======
	//conexión a  base de datos
>>>>>>> b706b5b68dd2bbcfb16dbe4291dbf6a3d2e8473d
	if($bd){
		echo "conexión exitosa";
	}else{
		echo "conexión fallida";
	}

	include_once "./controladores/validar/validar.controlador.php";

	?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>