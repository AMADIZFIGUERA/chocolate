<?php

include("conexion.php");
$con=conectar();

$ficha_trabajador=$_GET['id'];

$sql="DELETE FROM trabajador  WHERE ficha_trabajador='$ficha_trabajador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>
