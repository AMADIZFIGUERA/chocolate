<?php

include("conexion.php");
$con=conectar();

$cod_material=$_GET['id'];

$sql="DELETE FROM material  WHERE cod_material='$cod_material'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>
