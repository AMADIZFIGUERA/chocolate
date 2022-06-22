<?php

include("conexion.php");
$con=conectar();

$cod_empaque=$_GET['id'];

$sql="DELETE FROM empaque  WHERE cod_empaque='$cod_empaque'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>
