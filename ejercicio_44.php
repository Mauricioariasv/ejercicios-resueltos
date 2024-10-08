<h1>Listado</h1>

<?php

$conexion = mysqli_connect("localhost", "root", "", "usm");
$registros=mysqli_query($conexion, "select nombre, correo, curso_id from estudiantes");
while ($reg=mysqli_fetch_array($registros))
{
 echo "Nombre:".$reg['nombre']."<br>";
 echo "Mail:".$reg['correo']."<br>";
 echo "Curso:";
 switch ($reg['curso_id']) {
 case 1:echo "PHP";
 break;
 case 2:echo "ASP";
 break;
 case 3:echo "JSP";
 break;
 }
 echo "<br>";
 echo "<hr>";
}
