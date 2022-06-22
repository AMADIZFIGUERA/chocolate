<?php

include("conexion.php");
$con=conectar();

$idcarga=$_POST['idcarga'];
$cod_proceso=$_POST['cod_proceso'];
$cod_material=$_POST['cod_material'];
$cantcarga=$_POST['cantcarga'];
$tempcarga=$_POST['tempcarga'];
$obscarga=$_POST['obscarga'];





$sql="UPDATE cargamaterial SET  idcarga='$idcarga',cod_proceso='$cod_proceso',cod_material='$cod_material',cantcarga='$cantcarga',tempcarga='$tempcarga',obscarga='$obscarga' WHERE idcarga='$idcarga'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /sistemacho/index.php");
    }
?>