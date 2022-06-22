<?php 
    include("conexion.php");
    $con=conectar();

$ficha_trabajador=$_GET['id'];

$sql="SELECT * FROM trabajador WHERE ficha_trabajador='$ficha_trabajador'";
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
                            <h3 style="background-color:royalblue;">ACTUALIZACIÓN DE TRABAJADORES</h3>
                        </header>
                    </div>
                </div>

                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ficha_trabajador" value="<?php echo $row['ficha_trabajador']  ?>">
                                <input type="text" class="form-control mb-3" name="cedula_trabajador" placeholder="Cédula del Trabajador" value="<?php echo $row['cedula_trabajador']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_trabajador" placeholder="Nombres del Trabajador." value="<?php echo $row['nombres_trabajador']  ?>">
                                <input type="text" class="form-control mb-3" name="cargo_trabajador" placeholder="Cargo del Trabajador" value="<?php echo $row['cargo_trabajador']  ?>">
                                <input type="text" class="form-control mb-3" name="area_trabajador" placeholder="Area del Trabajador" value="<?php echo $row['area_trabajador']  ?>">
                                <input type="text" class="form-control mb-3" name="sueldo_trabajador" placeholder="Sueldo del Trabajador" value="<?php echo $row['sueldo_trabajador']  ?>">

                                

                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>