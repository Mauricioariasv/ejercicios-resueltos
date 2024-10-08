<?php
// conexion a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "usm") or die("Problemas en la conexión");

// insertar los datos del alumno en la base de datos
mysqli_query($conexion, "INSERT INTO estudiantes(nombre, correo, curso_id) VALUES 
    ('$_POST[nombre]', '$_POST[mail]', '$_POST[codigocurso]')") 
or die("Problemas en el insert: " . mysqli_error($conexion));

// cerrar la conexion
mysqli_close($conexion);

echo "El alumno fue dado de alta.";
?>
<br>
<a href="ejercicio_67_page_3.php">Ver listado de alumnos</a>