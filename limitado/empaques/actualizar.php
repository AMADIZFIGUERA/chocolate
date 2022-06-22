<?php 
    include("conexion.php");
    $con=conectar();

$cod_empaque=$_GET['id'];

$sql="SELECT * FROM empaque WHERE cod_empaque='$cod_empaque'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container bg-warnig mt-5">
                    <div class="row">
                        <div class="col-md">
                        <header>
                            <h3 style="background-color:royalblue;">ACTUALIZACIÓN DE EMPAQUES</h3>
                        </header>
                    </div>
                </div>

                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_empaque" value="<?php echo $row['cod_empaque']  ?>">
                                <input type="text" class="form-control mb-3" name="des_empaque" placeholder="Descripción" value="<?php echo $row['des_empaque']  ?>">
                                <input type="text" class="form-control mb-3" name="cant_empaque" placeholder="Cant." value="<?php echo $row['cant_empaque']  ?>">
                                <input type="text" class="form-control mb-3" name="costo_empaque" placeholder="Costo" value="<?php echo $row['costo_empaque']  ?>">
                                <input type="text" class="form-control mb-3" name="material_empaque" placeholder="Material" value="<?php echo $row['material_empaque']  ?>">
                                <input type="text" class="form-control mb-3" name="gramos_empaque" placeholder="Gramos" value="<?php echo $row['gramos_empaque']  ?>">

                                

                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>