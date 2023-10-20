<?php
//código para registrar usuario por medio de correo electronico

// Varios destinatarios
$para  = 'g.nayarb112@gmail.com' . ', '; // atención a la coma
// $para .= 'wez@example.com';

// título
$título = '¡Gracias por registrarse!';

//
$codigo = random(1000,9999);



// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>Tú código de verificación es: </p>
  <h2>202020</h2>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
// $cabeceras .= 'To: Mary <G.nayarb112@gmail.com>, Kelly <G.nayarb112@gmail.com>' . "\r\n";
// $cabeceras .= 'From: Recordatorio <g.nayarb112@gmail.com>' . "\r\n";
// $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
// $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
//parametros:
//1# para(to), 2# titulo(title), 3# mensaje(messange), 4# las cabeceras(headers);   
if(mail($para, $título, $mensaje, $cabeceras)){
    echo "TODO OK";
}else{
    echo "ALGO ANDA MAL CON EL ENVIO DE EMAIL";
}
?>