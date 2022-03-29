<?php 
    include("lib/conexion.php");

    //Recibir la variable por el metodo Get
    $id = $_GET['id'];

    //Sentencis SQL para eliminar registro
    $sql = "DELETE FROM contrato WHERE idContrato = '$id'";

    $consulta = mysqli_query($miConexion, $sql);
    //Validar la consulta
    if (!$consulta) {
        # code...
        die("Consulta no realizada");
    }
    else{
        header("Location: contratos.php"); // redirecciona
    }
?>