<?php 
include("conexion.php");
$codigo = $_GET['id'];
$querybuscar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $nombre = $mostrar['nombres'];
    $ap = $mostrar['apellidos'];
    $user= $mostrar['usuario'];
	$pass = $mostrar['pass'];
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
		<tr><th colspan="2">Modificar usuario</th></tr>
		     <tr> 
                <td>NOMBRE</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required ></td>
            </tr>
            <tr> 
                <td>APELLIDOS</td>
                <td><input type="text" name="txtapellido" value="<?php echo $ap;?>" required></td>
            </tr>
            <tr> 
                <td>USUARIO</td>
                <td><input type="text" name="txtusuario" value="<?php echo $user;?>" required></td>
            </tr>
            <tr> 
                <td>CONTRASEÑA</td>
                <td><input type="text" name="txtpass" value="<?php echo $pass;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="usuario.php">Cancelar</a>
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
    $usuario1 	= $_POST['txtusuario'];
    $pass1 	= $_POST['txtpass']; 
      
    $querymodificar = mysqli_query($conexion, "UPDATE usuarios SET nombres='$nombre1',apellidos='$ap1',usuario='$usuario1',pass='$pass1' WHERE id_usuario='$codigo' ");

  	echo "<script>window.location= 'usuario.php' </script>";
    
}
?>
	