<?php

include ("conexion.php");

$nombres = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["pass"];

$insertar = "INSERT INTO usuarios(nombres, apellidos, usuario, pass) 
VALUES('$nombres','$apellido','$usuario','$contraseña')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado) {
    echo "<script>alert('SE HA REGISTRADO EL USUARIO CON EXITO'); window.location='usuario.php'</script>";

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}