
<?php
$conexionStr = 'mysql:host=localhost;dbname=usm;charset=utf8';
$conexion = new PDO($conexionStr, "root", "");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultado = $conexion->prepare("SELECT nombre, apellido FROM estudiantes WHERE correo = ?");
$resultado->execute([$_POST["correo"]]);
$estudiante = $resultado->fetch(PDO::FETCH_ASSOC);


if (!empty($estudiante)) {
  echo "Nombre:".$estudiante['nombre'] . " " . $estudiante["apellido"] ."<br>";
 } else {
  echo "No existe un alumno con ese correo.";
}
?>