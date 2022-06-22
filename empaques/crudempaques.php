<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empaque";
    $query=mysqli_query($con,$sql);




    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Empaques</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-6">
                    <div class="row"> 
                        
                        <div class="col-md-10">
                            <h4>Empaques Para Proceso de Chocalate</h4>
                                <form action="empaques/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_empaque" placeholder="Código de Empaque">
                                    <input type="text" class="form-control mb-3" name="des_empaque" placeholder="Descripción de Empaque">
                                    <input type="text" class="form-control mb-3" name="cant_empaque" placeholder="cantidad de Empaque">
                                    <input type="text" class="form-control mb-3" name="costo_empaque" placeholder="Costo de Empaque">
                                    <input type="text" class="form-control mb-3" name="material_empaque" placeholder="Material de Empaque">
                                    <input type="text" class="form-control mb-3" name="gramos_empaque" placeholder="Gramos de Empaque">

                                    
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
                                        <th>Cant.</th>
                                        <th>Costo</th>
                                        <th>Material</th>
                                        <th>Gramos</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_empaque']?></th>
                                                <th><?php  echo $row['des_empaque']?></th>
                                                <th><?php  echo $row['cant_empaque']?></th>
                                                <th><?php  echo $row['costo_empaque']?></th>
                                                <th><?php  echo $row['material_empaque']?></th>
                                                <th><?php  echo $row['gramos_empaque']?></th>

                                                <th><a href="empaques/actualizar.php?id=<?php echo $row['cod_empaque'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="empaques/delete.php?id=<?php echo $row['cod_empaque'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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