<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cargamaterial";
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
                            <h4>Carga de Materiales Para Proceso de Chocalate</h4>
                                <form action="carga/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idcarga" placeholder="ID de Carga">
                                    <input type="text" class="form-control mb-3" name="cod_proceso" placeholder="Código de Proceso">
                                    <input type="text" class="form-control mb-3" name="cod_material" placeholder="Código de Material">
                                    <input type="text" class="form-control mb-3" name="cantcarga" placeholder="Cantidad de carga">
                                    <input type="text" class="form-control mb-3" name="tempcarga" placeholder="Temperatura de carga">
                                    <input type="text" class="form-control mb-3" name="obscarga" placeholder="Observacion de Carga">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>

                                <br>
                        </div>

                        <div class="col-md-10">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Carga</th>
                                        <th>Cod Proceso</th>
                                        <th>Cod Material.</th>
                                        <th>Cant. de Carga</th>
                                        <th>Temperatura</th>
                                        <th>Observacion</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idcarga']?></th>
                                                <th><?php  echo $row['cod_proceso']?></th>
                                                <th><?php  echo $row['cod_material']?></th>
                                                <th><?php  echo $row['cantcarga']?></th>
                                                <th><?php  echo $row['tempcarga']?></th>
                                                <th><?php  echo $row['obscarga']?></th>

                                                <th><a href="carga/actualizar.php?id=<?php echo $row['idcarga'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="carga/delete.php?id=<?php echo $row['idcarga'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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