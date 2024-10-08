<?php
$conexion = mysqli_connect("localhost", "root", "", "usm") 
    or die("Problemas en la conexión");

$codigocurso = mysqli_real_escape_string($conexion, $_POST['codigocurso']);
$mailviejo = mysqli_real_escape_string($conexion, $_POST['mailviejo']);

$registros = mysqli_query($conexion, "UPDATE estudiantes SET curso_id='$codigocurso' WHERE correo='$mailviejo'") 
    or die("Problemas en el update: " . mysqli_error($conexion));

echo "El curso fue modificado con éxito.";

mysqli_close($conexion);