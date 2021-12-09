<?php
    include("conexion.php");
    $alumnos= "SELECT * FROM alumnos";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ALUMNOS</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>

    <div class="container-table container-table-edit">
        <div class="table__title table__title-edit">ALUMNOS REGISTRADOS <a title="" style="text-decoration:none" href="menu.html" class="title_edit"> MENU </a> </div>
    
        <div class="table__header">NOMBRES</div>
        <div class="table__header">APELLIDOS</div>
        <div class="table__header">GRADO</div>
        <div class="table__header">HORARIO</div>
        <div class="table__header">OPERACION</div>

        <?php
            $resultado = mysqli_query($conexion, $alumnos);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

        <div class="table__item"> <?php echo $row["nombres"] ?> </div>
        <div class="table__item"> <?php echo $row["apellidos"] ?> </div>
        <div class="table__item"> <?php echo $row["grado"] ?> </div>
        <div class="table__item"> <?php echo $row["horario"] ?> </div>
        <div class="table__item">
            <a  title="ACTUALIZAR" style="text-decoration:none" href="editarA.php?id=<?php echo $row["id_alumno"];?>" class="table__item__link"><img src='img/icons8-Edit-32.png' alt='Edit'></a> |  
            <a  title="ELIMINAR" style="text-decoration:none" href="eliminarA.php?id=<?php echo $row["id_alumno"];?>" class="table__item__link2"><img src='img/icons8-Trash-32.png' alt='Edit'></a> |  
        </div>

        <?php } mysqli_free_result($resultado); ?>

    </div>

</body>
</html>