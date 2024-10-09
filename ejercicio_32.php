<h1>Ejercicio del estudiante, contador</h1>
<form action="<?php echo "?ejercicio=32"; ?>" method="post">
    Contador: <input type="number" name="cuenta">
<input type="submit" value="Enviar">
</form>
<?php
    if(isset($_POST["cuenta"])) {
        for($i = 0;  $i < $_POST["cuenta"]; $i++) {
            echo "<p>Contador " . $i + 1 . "</p>";
        }
    }

?>