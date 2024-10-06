<h1>Function count</h1> 


<?php

$servidor="localhost";
$usuario="root";
$password="";
$database="usm";

$conexion= new mysqli($servidor, $usuario, $password, $database);

$registros=$conexion->query("SELECT COUNT(*) AS cantidad FROM estudiantes") or 
    die("Problemas en el select: ".mysql_error()); 

$reg=$registros->fetch_assoc(); 


echo "La cantidad de alumnos inscriptos son: ". $reg['cantidad'];

?> 