<?php 
include("conexion.php");
$codigo = $_GET['id'];
$querybuscar = mysqli_query($conexion, "SELECT * FROM alumnos WHERE id_alumno=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $nombre = $mostrar['nombres'];
    $ap = $mostrar['apellidos'];
    $grado= $mostrar['grado'];
	$horario = $mostrar['horario'];
}
?>
<html>
<head>    
		<title>EDITAR</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar alumno</th></tr>
		     <tr> 
                <td>NOMBRE</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required ></td>
            </tr>
            <tr> 
                <td>APELLIDOS</td>
                <td><input type="text" name="txtapellido" value="<?php echo $ap;?>" required></td>
            </tr>
            <tr> 
                <td>GRADO</td>
                <td><input type="text" name="txtgrado" value="<?php echo $grado;?>" required></td>
            </tr>
            <tr> 
                <td>HORARIO</td>
                <td><input type="text" name="txthorario" value="<?php echo $horario;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="alumno.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $nombre1 = $_POST['txtnombre'];
	$ap1 	= $_POST['txtapellido'];
    $grado1 	= $_POST['txtgrado'];
    $horario1 	= $_POST['txthorario']; 
      
    $querymodificar = mysqli_query($conexion, "UPDATE alumnos SET nombres='$nombre1',apellidos='$ap1',grado='$grado1',horario='$horario1' WHERE id_alumno='$codigo' ");

  	echo "<script>window.location= 'alumno.php' </script>";
    
}
?>