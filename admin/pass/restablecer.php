<?php 
    include "../lib/conexion.php";
    $email =$_POST['correo'];
    $bytes = random_bytes(7);
    $token =bin2hex($bytes);

    include "mail_reset.php";
    if($enviado){
        $miConexion->query(" insert into recuperarpass (email, token, codigo) 
         values('$email','$token','$codigo') ") or die($conexion->error);
         echo '
            <script>
                alert("<p>Verifica tu email para restablecer tu cuenta</p>");
                window.location = "reset.php";
            </script>
        ';
    } 
?>