<h1>Mostrar nombres de estudiantes de la BD </h1>
<?php
 $conexionStr = 'mysql:host=localhost;dbname=usm;charset=utf8';
 $conexion = new PDO($conexionStr, "root", "");
 $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $resultado = $conexion->prepare("SELECT * FROM estudiantes");
 $resultado->execute();
 $students = $resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($students as $student) {
    echo $student["nombre"] . "<br>";
}
?> 