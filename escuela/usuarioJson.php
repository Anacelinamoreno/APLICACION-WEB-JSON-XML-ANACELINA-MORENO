<?php
$server="localhost";
$usuario="root";
$pass="";
$bd="escuela";
//creamos la conexion 
$conexion=mysqli_connect($server,$usuario,$pass,$bd)
or die("ha sucedido un error inesperado en la conexión de la base de datos");
//generamos la consulta
$sql="SELECT * FROM usuarios";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$resultado=mysqli_query($conexion, $sql)) die();

$usuario=array(); //creamos un array
while ($row=mysqli_fetch_array($resultado)) 
{
   $nombre=$row['nombres'];
   $app=$row['apellidos'];
   $usuario=$row['usuario'];
   $contraseña=$row['pass'];

   $usuarios[]=array('nombre'=>$nombre, 'apellidos'=>$app, 'usuario'=>$usuario, 'password'=>$contraseña);
   
}
//desconectamos la base de datos
$close =mysqli_close($conexion)
or die("ha sucedido un error inesperado en la desconexion en la base de datos");

//creamos el json
$json_string=json_encode($usuarios);
echo $json_string;
//si queremos crear un archivo json, seria de esta forma:
    
?>
