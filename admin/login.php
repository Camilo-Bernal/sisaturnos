<?php
    include 'lib/conexion.php';
    session_start();

    $correo = $_POST['correo'];
    $contrasenia = md5($_POST['contrasenia']);
    //$contrasenia = hash('sha512', $contrasenia);

    $validar_login = mysqli_query($miConexion, "SELECT * FROM usuarios 
    WHERE email='$correo' and password='$contrasenia'");

    if(mysqli_num_rows($validar_login) == 1){
        $_SESSION['email'] = $correo;
        header("location: inicio.php");
        exit;
    }else{
        echo '
            <script>
                alert("Datos de acceso icorrectos \nVerifica e intenta nuevamente");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>