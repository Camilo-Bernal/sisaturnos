<?php
    session_start();
    include 'lib/conexion.php';

    $correo = $_POST['correo'];
    $contrasenia = md5($_POST['contrasenia']);
    //$contrasenia = hash('sha512', $contrasenia);

    $validar_login = mysqli_query($miConexion, "SELECT * FROM usuarios 
    WHERE email='$correo' and password='$contrasenia'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: calendar.php");
        exit;
    }else{
        echo '
            <script>
                alert("Datos de acceso icorrectos \nVerifica e intenta nuevamente");
                window.location = "../sesion.php";
            </script>
        ';
        exit;
    }
?>