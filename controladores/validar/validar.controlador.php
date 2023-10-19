<?php

include_once "./vista/loginlog/login.php";
//primero obtengo los datos del input
//valido con isset si existe un métodos o un valor del método post

?>
<script>
// // Agrega un evento de escucha al botón de ingresar del formulario
const botonEnviar = document.getElementById('ingresar');
botonEnviar.addEventListener("click", validar);

// // Función de validación
function validar() {
    const usuario = document.getElementById('usuario').value;
    const contrasena = document.getElementById('contrasena').value;
    const error = document.getElementById('error');

    // Verifica que los campos no estén vacíos
    if (usuario.trim() === '' || contrasena.trim() === '') {
      
        error.style.display = "flex";
       
        return false;
    } else {
        error.style.display = "none";
        return true;
    }
} 
    
</script>

