<?php
    if(isset($_POST["usuario"])) {
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["contraseña"] = $_POST["contraseña"];
        echo '<a href="ejercicio_60_sesion.php">Ver datos guardados</a>';
    }
?>

<h1>Variables de sesión</h1>

<form action="?ejercicio=60" method="post">
    Usuario:
    <input type="text" name="usuario"><br>
    Contraseña:
    <input type="password" name="contraseña"><br>
    <button type="submit">Enviar</button>
</form>