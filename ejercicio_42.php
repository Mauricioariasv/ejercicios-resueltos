<h3>Introducir direcciones</h3>
<?php
// incluir archivo de conexion a la base de datos
include("ejercicio_42_acceso.php");

if (isset($_POST['submit'])) {
    // verificar si el campo "Nombre" esta vacio
    if (empty($_POST['Nombre'])) {
        echo "<p>Introduzca el <b>nombre</b>.</p>";
    } 
    // verificar si el campo "Apellido" tiene al menos 3 caracteres
    else if (strlen($_POST['Apellido']) < 3) {
        echo "<p>El apellido debe tener como minimo <b>3</b> caracteres.</p>";
    } 
    else {
        // preparar la consulta de insercion de datos usando *prepared statements* para evitar inyecciones SQL
        $stmt = $dp->prepare("INSERT INTO direcciones (Tratamiento, Nombre, Apellido, Calle, CP, Localidad, Tel, Movil, Mail, Website, Categoria, Notas) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // asignar los valores de las variables a la consulta utilizando bind_param. 
        // aqui "ssssssssssss" indica que todos los parametros son de tipo string.
        $stmt->bind_param("ssssssssssss", $_POST['Tratamiento'], $_POST['Nombre'], $_POST['Apellido'], 
            $_POST['Calle'], $_POST['CP'], $_POST['Localidad'], $_POST['Tel'], $_POST['Movil'], 
            $_POST['Mail'], $_POST['Website'], $_POST['Categoria'], $_POST['Notas']);

        // ejecutar la consulta y almacenar el resultado (true o false)
        $resultado = $stmt->execute();

        // comprobar si la insercion fue exitosa
        if ($resultado) {
            echo "<p>Datos agregados con éxito.</p>";
        } else {
            // mostrar mensaje de error si la insercion fallo
            echo "<p>Datos <b>no</b> agregados. Error: " . $stmt->error . "</p>";
        }

        // Cerrar la declaracion preparada para liberar recursos
        $stmt->close();
    }
} else {
    // consulta para obtener las categorias de la base de datos
    $sql2 = "SELECT * FROM categorias";
    // ejecutar la consulta
    $resultado2 = $dp->query($sql2);

    // inicializar la variable $campocat para almacenar las opciones del select
    $campocat = "";
    // recorrer los resultados de la consulta y generar las opciones para el select
    while ($row = $resultado2->fetch_assoc()) {
        $campocat .= "<option value='" . $row['Categoria'] . "'>" . $row['Categoria'] . "</option>\n";
    }
}

// cerrar la conexion a la base de datos
mysqli_close($dp);
?>
<!-- formulario HTML -->
<form action="?ejercicio=42" method="post">
 <table>
 <tr><td>Tratamiento:</td><td>
    <select name="Tratamiento">
        <option>Sr.</option>
        <option>Sra.</option>
    </select></td></tr>
 <tr><td> Nombre:</td><td><input type="text" name="Nombre"></td></tr>
 <tr><td> Apellido:</td><td><input type="text" name="Apellido"></td></tr>
 <tr><td> Calle:</td><td><input type="text" name="Calle"></td></tr>
 <tr><td> CP:</td><td><input type="text" name="CP"></td></tr>
 <tr><td> Localidad:</td><td><input type="text" name="Localidad"></td></tr>
 <tr><td> Tel:</td><td><input type="text" name="Tel"></td></tr>
 <tr><td> Movil:</td><td><input type="text" name="Movil"></td></tr>
 <tr><td> E-mail:</td><td><input type="text" name="Mail"></td></tr>
 <tr><td> Website:</td><td><input type="text" name="Website"></td></tr>
 <tr><td> Categoria:</td><td>
    <!-- select para la categoria que se llena con los datos de la base de datos -->
    <select name="Categoria"><?php echo $campocat; ?></select></td></tr>
 <tr><td> Notas:</td><td><textarea cols="60" rows="4" name="Notas"></textarea></td></tr>
 <tr><td><input type="submit" value="Introducir datos" name="submit"></td></tr>
 </table>
</form>