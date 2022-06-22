<?php

include("conexion.php");
$con=conectar();

$cod_material=$_POST['cod_material'];
$des_material=$_POST['des_material'];
$tipo_material=$_POST['tipo_material'];
$costo_material=$_POST['costo_material'];
$almacen_material=$_POST['almacen_material'];



$sql="UPDATE material SET  cod_material='$cod_material',des_material='$des_material',tipo_material='$tipo_material',costo_material='$costo_material',almacen_material='$almacen_material' WHERE cod_material='$cod_material'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /limitado/index.php");
    }
?>