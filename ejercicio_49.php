<form action="?ejercicio=49" method="post">
Ingrese nombre:
<input type="text" name="nombre"><br>
Ingrese mail:
<input type="text" name="mail"><br>
Seleccione el curso:
<select name="codigocurso">
<?php
$conexion = mysqli_connect("localhost", "root", "", "usm");
$registros=mysqli_query($conexion, "select curso_id, nombre from cursos");
while ($reg=mysqli_fetch_array($registros))
{
 echo "<option value=\"$reg[curso_id]\">$reg[nombre]</option>";
}
?>
</select>
<br>
<input type="submit" value="Registrar"> 

<?php

if(isset($_POST["codigocurso"])) {
    mysqli_query($conexion, "insert into estudiantes(nombre,correo,curso_id) values('$_POST[nombre]', '$_POST[mail]',$_POST[codigocurso])");
    echo "<br><br>";
    echo "Curso guardado";
}