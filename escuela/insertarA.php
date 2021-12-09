<?php

include ("conexion.php");

$nombres = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$grado = $_POST["grado"];
$horario = $_POST["horario"];

$insertar = "INSERT INTO alumnos(nombres, apellidos, grado, horario) 
VALUES('$nombres','$apellido','$grado','$horario')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado) {
    echo "<script>alert('SE HA REGISTRADO EL ALUMNO CON EXITO'); window.location='alumno.php'</script>";

} else {
    echo "<script>alert('SE HA PRODUCIDO UN ERROR')  window.history.go(-1);</script>";

}