<?php 
include("conexion.php");
$codigo = $_GET['id'];
$querybuscar = mysqli_query($conexion, "SELECT * FROM docentes WHERE id_docente=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $nombre = $mostrar['nombres'];
    $ap = $mostrar['apellidos'];
    $estudio= $mostrar['nivel_estudio'];
	$correo = $mostrar['correo'];
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
		<tr><th colspan="2">Modificar Docente</th></tr>
		     <tr> 
                <td>NOMBRE</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required ></td>
            </tr>
            <tr> 
                <td>APELLIDOS</td>
                <td><input type="text" name="txtapellido" value="<?php echo $ap;?>" required></td>
            </tr>
            <tr> 
                <td>ESTUDIOS</td>
                <td><input type="text" name="txtestudio" value="<?php echo $estudio;?>" required></td>
            </tr>
            <tr>  
                <td>CORREO</td>
                <td><input type="text" name="txtcorreo" value="<?php echo $correo;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="docente.php">Cancelar</a>
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
    $estudio1 	= $_POST['txtestudio'];
    $correo1 	= $_POST['txtcorreo']; 
      
    $querymodificar = mysqli_query($conexion, "UPDATE docentes SET nombres='$nombre1',apellidos='$ap1',nivel_estudio='$estudio1',correo='$correo1' WHERE id_docente='$codigo' ");

  	echo "<script>window.location= 'docente.php' </script>";
    
}
?>