<h1>Listado</h1>

<?php 

 $conexionStr = 'mysql:host=localhost;dbname=usm;charset=utf8';
 $conexion = new PDO($conexionStr, "root", "");
 $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $resultado = $conexion->prepare("SELECT estudiantes.*, cursos.nombre as curso FROM estudiantes INNER JOIN cursos ON estudiantes.curso_id = cursos.curso_id");
 $resultado->execute();
 $estudiantes = $resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($estudiantes as $estudiante)
{
 echo "Codigo:".$estudiante['nombre']."<br>";
 echo "Nombre:".$estudiante['correo']."<br>";
 echo "Curso:".$estudiante['curso']."<br>";
 echo "<hr>";
}