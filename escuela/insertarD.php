<?php

include ("conexion.php");

$nombres = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$estudio = $_POST["nivel_estudio"];
$correo = $_POST["correo"];

$insertar = "INSERT INTO docentes(nombres, apellidos, nivel_estudio, correo) 
VALUES('$nombres','$apellido','$estudio','$correo')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado) {
    echo "<script>alert('SE HA REGISTRADO EL DOCENTE CON EXITO'); window.location='docente.php'</script>";

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}