<?php
    session_start();
    // Variables de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "suturno1";

    // crear la variable que maneja la conexión
    $miConexion = new mysqli($servername, $username, $password, $database)
    or die("Conexión falló: ". $conexion->connect_error);
?>