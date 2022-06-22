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


$sql="INSERT INTO proceso VALUES('$cod_proceso','$fecha_proceso','$almacen','$ficha','$grsemillas','$tostado_grados','$cod_empaque','$ubica','$conserva')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: /sistemacho/index.php");
  
    
 
}else {
}



?>