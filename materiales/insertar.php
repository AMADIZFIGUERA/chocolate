<?php
include("conexion.php");
$con=conectar();

$cod_material=$_POST['cod_material'];
$des_material=$_POST['des_material'];
$tipo_material=$_POST['tipo_material'];
$costo_material=$_POST['costo_material'];
$almacen_material=$_POST['almacen_material'];


$sql="INSERT INTO material VALUES('$cod_material','$des_material','$tipo_material','$costo_material','$almacen_material')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: /sistemacho/index.php");
  
    
 
}else {
}



?>