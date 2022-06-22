<?php 
    include("conexion.php");
    $con=conectar();

$cod_proceso=$_GET['id'];

$sql="SELECT * FROM proceso WHERE cod_proceso='$cod_proceso'";
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
                            <h3 style="background-color:royalblue;">ACTUALIZACIÓN DE PROCESOS</h3>
                        </header>
                    </div>
                </div>

                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_proceso" value="<?php echo $row['cod_proceso']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_proceso" placeholder="Fecha" value="<?php echo $row['fecha_proceso']  ?>">
                                <input type="text" class="form-control mb-3" name="almacen" placeholder="almacen." value="<?php echo $row['almacen']  ?>">
                                <input type="text" class="form-control mb-3" name="ficha" placeholder="ficha" value="<?php echo $row['ficha']  ?>">
                                <input type="text" class="form-control mb-3" name="grsemillas" placeholder="grsemillas" value="<?php echo $row['grsemillas']  ?>">
                                <input type="text" class="form-control mb-3" name="tostado_grados" placeholder="grados de tostado" value="<?php echo $row['tostado_grados']  ?>">
                                <input type="text" class="form-control mb-3" name="cod_empaque" placeholder="cod empaque" value="<?php echo $row['cod_empaque']  ?>">
                                <input type="text" class="form-control mb-3" name="ubica" placeholder="ubica" value="<?php echo $row['ubica']  ?>">
                                <input type="text" class="form-control mb-3" name="conserva" placeholder="conservación" value="<?php echo $row['conserva']  ?>">

                                

                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>