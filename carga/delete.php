<?php

include("conexion.php");
$con=conectar();

$idcarga=$_GET['id'];

$sql="DELETE FROM cargamaterial  WHERE idcarga='$idcarga'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>
