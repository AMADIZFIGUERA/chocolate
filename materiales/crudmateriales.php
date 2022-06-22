<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM material";
    $query=mysqli_query($con,$sql);

 


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Materiales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-6">
                    <div class="row"> 
                        
                        <div class="col-md-10">
                            <h4>Materiales Para Proceso de Chocalate</h4>
                                <form action="materiales/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_material" placeholder="Código de Material">
                                    <input type="text" class="form-control mb-3" name="des_material" placeholder="Descripción de Material">
                                    <input type="text" class="form-control mb-3" name="tipo_material" placeholder="Tipo de Material">
                                    <input type="text" class="form-control mb-3" name="costo_material" placeholder="Costo de Material">
                                    <input type="text" class="form-control mb-3" name="almacen_material" placeholder="Almacen de Material">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        <br>
                                
                        </div>

                        <div class="col-md-10">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Descripción</th>
                                        <th>Tipo</th>
                                        <th>Forma</th>
                                        <th>Costo</th>
                                        <th>Almacen</th>
                                        <th>Ubicación</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_material']?></th>
                                                <th><?php  echo $row['des_material']?></th>
                                                <th><?php  echo $row['tipo_material']?></th>
                                                <th><?php  echo $row['costo_material']?></th>
                                                <th><?php  echo $row['almacen_material']?></th>

                                                <th><a href="materiales/actualizar.php?id=<?php echo $row['cod_material'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="materiales/delete.php?id=<?php echo $row['cod_material'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>