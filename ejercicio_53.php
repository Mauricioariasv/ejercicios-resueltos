<h1>Estudiantes inscritos en materias</h1>

<?php
$conexion=mysqli_connect("localhost","root","", "usm");
$registros=mysqli_query($conexion, "select count(*) as cantidad,
 cur.nombre as materia from estudiantes as alu
 inner join cursos as cur on cur.curso_id=alu.curso_id
 group by alu.curso_id");
while ($reg=mysqli_fetch_array($registros))
{
 echo "Nombre del curso:".$reg['materia']."<br>";
 echo "Cantidad de inscritos:".$reg['cantidad']."<br>";
 echo "<hr>";
}
mysqli_close($conexion); 
