<?php 
    include("conexion.php");
    $con=conectar();

$idcarga=$_GET['id'];

$sql="SELECT * FROM cargamaterial WHERE idcarga='$idcarga'";
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
                    
                                <input type="hidden" name="idcarga" value="<?php echo $row['idcarga']  ?>">
                                <input type="text" class="form-control mb-3" name="cod_proceso" placeholder="Código de Proceso" value="<?php echo $row['cod_proceso']  ?>">
                                <input type="text" class="form-control mb-3" name="cod_material" placeholder="Código de Material" value="<?php echo $row['cod_material']  ?>">
                                <input type="text" class="form-control mb-3" name="cantcarga" placeholder="Cantidad de carga" value="<?php echo $row['cantcarga']  ?>">
                                <input type="text" class="form-control mb-3" name="tempcarga" placeholder="Temperatura de carga" value="<?php echo $row['tempcarga']  ?>">
                                <input type="text" class="form-control mb-3" name="obscarga" placeholder="Observacion de Carga" value="<?php echo $row['obscarga']  ?>">

                                

                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>