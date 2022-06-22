<?php 
    include("conexion.php");
    $con=conectar();

$cod_material=$_GET['id'];

$sql="SELECT * FROM material WHERE cod_material='$cod_material'";
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
                            <h3 style="background-color:royalblue;">ACTUALIZACIÓN DE MATERIALES</h3>
                        </header>
                    </div>
                </div>

                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_material" value="<?php echo $row['cod_material']  ?>">
                                <input type="text" class="form-control mb-3" name="des_material" placeholder="Descripción" value="<?php echo $row['des_material']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_material" placeholder="Tipo" value="<?php echo $row['tipo_material']  ?>">
                                <input type="text" class="form-control mb-3" name="costo_material" placeholder="Costo" value="<?php echo $row['costo_material']  ?>">
                                <input type="text" class="form-control mb-3" name="almacen_material" placeholder="Almacen" value="<?php echo $row['almacen_material']  ?>">

                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>