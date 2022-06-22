<?php

include("conexion.php");
$con=conectar();

$cod_empaque=$_POST['cod_empaque'];
$des_empaque=$_POST['des_empaque'];
$cant_empaque=$_POST['cant_empaque'];
$costo_empaque=$_POST['costo_empaque'];
$material_empaque=$_POST['material_empaque'];
$gramos_empaque=$_POST['gramos_empaque'];




$sql="UPDATE empaque SET  cod_empaque='$cod_empaque',des_empaque='$des_empaque',cant_empaque='$cant_empaque',costo_empaque='$costo_empaque',material_empaque='$material_empaque',gramos_empaque='$gramos_empaque' WHERE cod_empaque='$cod_empaque'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /limitado/index.php");
    }
?>