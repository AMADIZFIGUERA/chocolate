<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM proceso";
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
                            <h4>Proceso de Chocalate</h4>
                                <form action="procesos/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_proceso" placeholder="Código de Proceso">
                                    <input type="text" class="form-control mb-3" name="fecha_proceso" placeholder="Fecha de proceso">
                                    <input type="text" class="form-control mb-3" name="almacen" placeholder="Almacenado en">
                                    <input type="text" class="form-control mb-3" name="ficha" placeholder="Ficha de Responsable">
                                    <input type="text" class="form-control mb-3" name="grsemillas" placeholder="Semillas en proceso">
                                    <input type="text" class="form-control mb-3" name="tostado_grados" placeholder="Grados de Tostado">
                                    <input type="text" class="form-control mb-3" name="cod_empaque" placeholder="Códide Empaque">
                                    <input type="text" class="form-control mb-3" name="ubica" placeholder="Ubicacion">
                                    <input type="text" class="form-control mb-3" name="conserva" placeholder="Conservación">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>

                                <br>
                        </div>

                        <div class="col-md-20">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr tr style="font-size: 13px;">
                                        <th>Codigo</th>
                                        <th>Fecha</th>
                                        <th>Almacen</th>
                                        <th>Ficha</th>
                                        <th>Gr Semillas</th>
                                        <th>Grados tostado</th>
                                        <th>Cod empaque</th>
                                        <th>Ubica</th>
                                        <th>Conservacion</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr style="font-size: 13px;">
                                                <th><?php  echo $row['cod_proceso']?></th>
                                                <th><?php  echo $row['fecha_proceso']?></th>
                                                <th><?php  echo $row['almacen']?></th>
                                                <th><?php  echo $row['ficha']?></th>
                                                <th><?php  echo $row['grsemillas']?></th>
                                                <th><?php  echo $row['tostado_grados']?></th>
                                                <th><?php  echo $row['cod_empaque']?></th>
                                                <th><?php  echo $row['ubica']?></th>
                                                <th><?php  echo $row['conserva']?></th>

                                                <th><a href="procesos/actualizar.php?id=<?php echo $row['cod_proceso'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="procesos/delete.php?id=<?php echo $row['cod_proceso'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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