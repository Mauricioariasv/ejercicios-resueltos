
<?php
$conexion = mysqli_connect("localhost", "root", "", "usm") 
    or die("Problemas en la conexión");

$mail = mysqli_real_escape_string($conexion, $_POST['mail']); 

$registros = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE correo='$mail'") 
    or die("Problemas en el select:" . mysqli_error($conexion));

if ($regalu = mysqli_fetch_array($registros)) {
    ?>
    <form action="ejercicio_52_page_3.php" method="post">
        <input type="hidden" name="mailviejo" value="<?php echo $regalu['correo']; ?>">
        <select name="codigocurso">
        <?php
        $cursos = mysqli_query($conexion, "SELECT * FROM cursos") 
            or die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($cursos)) {
            if ($regalu['curso_id'] == $reg['curso_id']) {
                echo "<option value=\"$reg[curso_id]\" selected>$reg[nombre]</option>";
            } else {
                echo "<option value=\"$reg[curso_id]\">$reg[nombre]</option>";
            }
        }
        ?>
        </select>
        <br>
        <input type="submit" value="Modificar">
    </form>
    <?php
} else {
    echo "No existe un alumno con dicho mail.";
}
mysqli_close($conexion);
?>