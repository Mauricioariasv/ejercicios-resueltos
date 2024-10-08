<form action="ejercicio_67_page_2.php" method="post">
        <label>Ingrese nombre:</label><br>
        <input type="text" name="nombre"><br><br>

        <label>Ingrese mail:</label><br>
        <input type="text" name="mail"><br><br>

        <label>Seleccione el curso:</label><br>
        <select name="codigocurso">
            <?php
            // conexion a la base de datos
            $conexion = mysqli_connect("localhost", "root", "", "usm") or die("Problemas en la conexión");
            
            // obtener cursos de la base de datos
            $registros = mysqli_query($conexion, "SELECT curso_id, nombre FROM cursos") or die("Problemas en el select:" . mysqli_error($conexion));

            // mostrar las opciones de cursos
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<option value=\"{$reg['curso_id']}\">{$reg['nombre']}</option>";
            }

            mysqli_close($conexion);
            ?>
        </select><br><br>

        <input type="submit" value="Registrar">
    </form>