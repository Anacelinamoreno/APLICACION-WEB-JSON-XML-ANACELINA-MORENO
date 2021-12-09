<?php
    include("conexion.php");
    $docentes= "SELECT * FROM docentes";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR DOCENTES</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>

    <div class="container-table container-table-edit">
        <div class="table__title table__title-edit">DOCENTES REGISTRADOS <a title="" style="text-decoration:none" href="menu.html" class="title_edit"> MENU </a> </div>
    
        <div class="table__header">NOMBRES</div>
        <div class="table__header">APELLIDOS</div>
        <div class="table__header">ESTUDIOS</div>
        <div class="table__header">CORREO</div>
        <div class="table__header">OPERACION</div>

        <?php
            $resultado = mysqli_query($conexion, $docentes);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

        <div class="table__item"> <?php echo $row["nombres"] ?> </div>
        <div class="table__item"> <?php echo $row["apellidos"] ?> </div>
        <div class="table__item"> <?php echo $row["nivel_estudio"] ?> </div>
        <div class="table__item"> <?php echo $row["correo"] ?> </div>
        <div class="table__item">
            <a  title="ACTUALIZAR" style="text-decoration:none" href="editarD.php?id=<?php echo $row["id_docente"];?>" class="table__item__link"><img src='img/icons8-Edit-32.png' alt='Edit'></a> |  
            <a  title="ELIMINAR" style="text-decoration:none" href="eliminarD.php?id=<?php echo $row["id_docente"];?>" class="table__item__link2"><img src='img/icons8-Trash-32.png' alt='Edit'></a> |  
        </div>

        <?php } mysqli_free_result($resultado); ?>

    </div>

</body>
</html>