<h1>Listado</h1>

<?php
    // conexion a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "usm") or die("Problemas en la conexión");

    // seleccionar los alumnos y sus cursos
    $registros = mysqli_query($conexion, "SELECT alu.curso_id, alu.nombre, alu.correo, cur.nombre as curso
        FROM estudiantes as alu 
        INNER JOIN cursos as cur ON cur.curso_id = alu.curso_id") 
    or die("Problemas en el select: " . mysqli_error($conexion));

    // mostrar los datos de cada alumno
    while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre: " . $reg['nombre'] . "<br>";
        echo "Mail: " . $reg['correo'] . "<br>";
        echo "Curso: " . $reg['curso'] . "<br>";
        echo "<hr>";
    }

    // cerrar la conexion
    mysqli_close($conexion);
    ?>