<h1>paginación</h1>

<?php
if (isset($_GET['pagina']))
 $pagina = $_GET['pagina'];
else
 $pagina = 0;
?>
<?php

$conexionStr = 'mysql:host=localhost;dbname=usm;charset=utf8';
$conexion = new PDO($conexionStr, "root", "");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$offset = $pagina * 2;

$resultado = $conexion->prepare("SELECT nombre, correo FROM estudiantes LIMIT 2 OFFSET $offset");
$resultado->execute();
$estudiantes = $resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($estudiantes as $estudiante) {
    echo "Nombre:".$estudiante['nombre']."<br>";
    echo "Correo:".$estudiante['correo']."<br>";
    echo "<hr><br>";
}

if (count($estudiantes) == 0) {
    echo "No existen más registros";
}

echo '<div style="display: flex; gap: 10px; margin-top: 20px">';

if ($pagina != 0) {
 $anterior = $pagina - 1;
 echo "<a href=\"?ejercicio=55&pagina=$anterior\">Anterior</a>";
}

if (count($estudiantes) == 2) {
 $proximo = $pagina + 1;
 echo "<a href=\"?ejercicio=55&pagina=$proximo\">Siguiente</a>";
}

echo '</div>';