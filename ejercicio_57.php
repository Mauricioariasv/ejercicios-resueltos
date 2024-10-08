<?php
if (isset($_COOKIE['color'])) {
    echo "style='background-color: {$_COOKIE['color']};'";
} else {
    echo "style='background-color: white;'"; 
}
?>
    <form action="ejercicio_57_page_2.php" method="post">
        <h3>Seleccione el color de fondo para la página:</h3>
        <input type="radio" name="radio" value="rojo">Rojo<br>
        <input type="radio" name="radio" value="verde">Verde<br>
        <input type="radio" name="radio" value="azul">Azul<br><br>
        <input type="submit" value="Crear cookie">
    </form>