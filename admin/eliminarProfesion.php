<?php 
    include("lib/conexion.php");

    //Recibir la variable por el metodo Get
    $id = $_GET['id'];

    //Sentencis SQL para eliminar registro
    $sql = "DELETE FROM profesion WHERE idProfesion = '$id'";

    $consulta = mysqli_query($miConexion, $sql);
    //Validar la consulta
    if (!$consulta) {
        # code...
        die("Consulta no realizada");
    }
    else{
        header("Location: profesiones.php"); // redirecciona
    }
?>