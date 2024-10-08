<h1>Formularios y el metodo post</h1>

<?php
if(!empty($_POST)) {
    echo "Hola <strong>{$_POST['firstname']} {$_POST['lastname']}</strong>, encantado de conocerte.";
}
    echo "<h2>Rellena los campos del siguiente formulario</h2>";

    echo "<form method='post' > <label for='firstname'>Ingrese su nombre: </label> <input type='text' name='firstname'>";
    echo "<form method='post' > <label for='lastname'>Ingrese su apellido: </label> <input type='text' name='lastname'>";
    echo "<input type='submit'>";
    echo "</form>";


?>