<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM trabajador";
    $query=mysqli_query($con,$sql);




    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Personal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-6">
                    <div class="row"> 
                        
                        <div class="col-md-10">
                            <h4>Personal Para Proceso de Chocalate</h4>
                                <form action="personal/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ficha_trabajador" placeholder="Ficha de trabajador">
                                    <input type="text" class="form-control mb-3" name="cedula_trabajador" placeholder="Cédula de trabajador">
                                    <input type="text" class="form-control mb-3" name="nombres_trabajador" placeholder="Nombres de trabajador">
                                    <input type="text" class="form-control mb-3" name="cargo_trabajador" placeholder="Cargo de trabajador">
                                    <input type="text" class="form-control mb-3" name="area_trabajador" placeholder="area de trabajador">
                                    <input type="text" class="form-control mb-3" name="sueldo_trabajador" placeholder="Sueldo de trabajador">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>

                                <br>
                        </div>

                        <div class="col-md-10">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Ficha</th>
                                        <th>Cédula</th>
                                        <th>Nombres</th>
                                        <th>Cargo</th>
                                        <th>Area</th>
                                        <th>Sueldo</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ficha_trabajador']?></th>
                                                <th><?php  echo $row['cedula_trabajador']?></th>
                                                <th><?php  echo $row['nombres_trabajador']?></th>
                                                <th><?php  echo $row['cargo_trabajador']?></th>
                                                <th><?php  echo $row['area_trabajador']?></th>
                                                <th><?php  echo $row['sueldo_trabajador']?></th>

                                                <th><a href="personal/actualizar.php?id=<?php echo $row['ficha_trabajador'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="personal/delete.php?id=<?php echo $row['ficha_trabajador'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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