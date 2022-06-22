<?php

include("conexion.php");
$con=conectar();

$ficha_trabajador=$_POST['ficha_trabajador'];
$cedula_trabajador=$_POST['cedula_trabajador'];
$nombres_trabajador=$_POST['nombres_trabajador'];
$cargo_trabajador=$_POST['cargo_trabajador'];
$area_trabajador=$_POST['area_trabajador'];
$sueldo_trabajador=$_POST['sueldo_trabajador'];




$sql="UPDATE trabajador SET ficha_trabajador='$ficha_trabajador',cedula_trabajador='$cedula_trabajador',nombres_trabajador='$nombres_trabajador',cargo_trabajador='$cargo_trabajador',area_trabajador='$area_trabajador',sueldo_trabajador='$sueldo_trabajador' WHERE ficha_trabajador='$ficha_trabajador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>