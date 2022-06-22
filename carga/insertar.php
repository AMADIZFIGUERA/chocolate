<?php
include("conexion.php");
$con=conectar();


$cod_proceso=$_POST['cod_proceso'];
$cod_material=$_POST['cod_material'];
$cantcarga=$_POST['cantcarga'];
$tempcarga=$_POST['tempcarga'];
$obscarga=$_POST['obscarga'];
$idcarga=$_POST['idcarga'];


$sql="INSERT INTO cargamaterial VALUES('$cod_proceso','$cod_material','$cantcarga','$tempcarga','$obscarga','$idcarga')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: /sistemacho/index.php");
  
    
 
}else {
}



?>