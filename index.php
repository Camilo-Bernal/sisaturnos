<?php
date_default_timezone_set('America/Bogota');
session_start();
if (isset($_SESSION['usuario'])) {
    header("location: ");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SuTurno</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="plugins/assets/css/sesionStyle.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para ingresar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="admin/login.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo" pattern="[A-Za-z0-9-_@.]{1,30}" autofocus required>
                    <input type="password" placeholder="Contraseña" name="contrasenia" pattern="[A-Za-z0-9-_]{1,30}" required>
                    <button>Ingresar</button> <br> <br>
                    <a href="admin/pass/recuperarPass.php">¿Olvidaste tu contraseña?</a>
                </form>
                <!--Registro-->
                <form action="admin/singup.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" autofocus required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasenia" required>
                    <button>Regístrarse</button>
                </form>
            </div> 
        </div>
    </main>
    <script src="plugins/assets/js/script.js"></script>
    
</body>
</html