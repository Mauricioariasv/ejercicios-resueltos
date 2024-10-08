<h1>Agujero de seguridad en register_globals = On</h1>
<form action="<?php echo "?ejercicio=33"; ?>" method="post">
    Contraseña: <input type="password" name="pass">
<input type="submit" value="Enviar">
</form>
<?php
    if(isset($_POST["pass"])) {
        $pass = $_POST["pass"];

        if ($pass == "abc_xyz_123") 
        {
            echo "<p>Aqui empieza el arma secreta.</p>";
        }
    }
?>