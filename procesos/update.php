<?php

include("conexion.php");
$con=conectar();

$cod_proceso=$_POST['cod_proceso'];
$fecha_proceso=$_POST['fecha_proceso'];
$almacen=$_POST['almacen'];
$ficha=$_POST['ficha'];
$grsemillas=$_POST['grsemillas'];
$tostado_grados=$_POST['tostado_grados'];
$cod_empaque=$_POST['cod_empaque'];
$ubica=$_POST['ubica'];
$conserva=$_POST['conserva'];




$sql="UPDATE proceso SET  cod_proceso='$cod_proceso',fecha_proceso='$fecha_proceso',almacen='$almacen',ficha='$ficha',grsemillas='$grsemillas',tostado_grados='$tostado_grados',cod_empaque='$cod_empaque',ubica='$ubica',conserva='$conserva' WHERE cod_proceso='$cod_proceso'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>