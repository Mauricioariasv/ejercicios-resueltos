<h1>Realizar DELETE</h1>
<p>El ejercicio en php está comentado para no perder los registros</p>

<?php
$conexion = mysqli_connect("localhost", "root", "", "usm") 
    or die("Problemas en la conexión");

$sql = "DELETE FROM estudiantes";

// if (mysqli_query($conexion, $sql)) {
//     echo "Se efectuó el borrado de todos los estudiantes.";
// } else {
//     echo "Error al borrar los estudiantes: " . mysqli_error($conexion);
// }

mysqli_close($conexion);
?>
</body>
</html>


<!-- -- insertar algunos datos en la tabla estudiantes
INSERT INTO estudiantes (nombre, apellido) VALUES 
('Juan', 'Pérez'),
('Carla', 'Gómez'),
('Luis', 'Rodríguez'); -->