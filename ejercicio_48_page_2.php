<?php
    $conexion=mysqli_connect("localhost","root","", "usm");
    $registros=mysqli_query($conexion, "select * from estudiantes where correo='$_REQUEST[mail]'");
        if ($reg=mysqli_fetch_array($registros))
        {
?>
        <form action="ejercicio_48_page_3.php" method="post">
            Ingrese nuevo mail:
            <input type="text" name="mailnuevo" value="<?= $reg['correo'] ?>">
            <br>
            <input type="hidden" name="mailviejo" value="<?php
                echo $reg['correo'] ?>">
            <input type="submit" value="Modificar">
        </form>
<?php
    }
    else
    echo "No existe alumno con dicho mail";
?>