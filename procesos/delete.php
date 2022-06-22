<?php

include("conexion.php");
$con=conectar();

$cod_proceso=$_GET['id'];

$sql="DELETE FROM proceso  WHERE cod_proceso='$cod_proceso'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>
