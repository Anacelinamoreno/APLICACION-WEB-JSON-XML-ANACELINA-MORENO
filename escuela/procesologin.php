<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "escuela";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["contraseña"];


$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and pass = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: menu.html");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: index.html");
	//echo "No ingreso"; 
}
	


?>

