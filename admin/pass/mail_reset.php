<?php
// Varios destinatarios
$para  =$email . ', '; // atención a la coma
//$para .= 'wez@example.com';

$cabeceras  = 'From: cabe0320@gmail.com' . "\r\n";
//$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// título
$asunto = 'Restablecer password empresa';
$codigo= rand(100000,999999);



// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer</title>
</head>
<body>
    <h1>Nombre de la empresa</h1>
    <div style="text-align:center; background-color:#ccc">
        <p>Restablecer contraseña</p>
        <h3>'.$codigo.'</h3>
        <p> <a 
            href="http://localhost/Calendario/admin/pass/reset.php?email='.$email.'&token='.$token.'"> 
            para restablecer da click aqui </a> </p>
        <p> <small>Sí usted no envió este codigo favor de omitir</small> </p>
    </div>
</body>
</html>
';

/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$enviado =false;
if(mail($para, $asunto, $mensaje, $cabeceras)){
    $enviado=true;
}
?>