<?php 
    include("lib/conexion.php");

    //Recibir la variable por el metodo Get
    $id = $_GET['id'];

    //Sentencis SQL para eliminar registro
    $sql = "DELETE FROM cargos WHERE idCargo = '$id'";

    $consulta = mysqli_query($miConexion, $sql);
    //Validar la consulta
    if (!$consulta) {
        # code...
        die("Consulta no realizada");
    }
    else{
        header("Location: cargos.php"); // redirecciona
    }
?>