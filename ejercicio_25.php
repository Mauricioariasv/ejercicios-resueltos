<h1>Más variables en formulario</h1>

<?php
if($_POST) {
    if($_POST['genero'] == 0) {
       $prefix = "El";
    } else {
       $prefix = "La";
    }
    echo "$prefix estudiante {$_POST['nombre']} tiene {$_POST['edad']}";
}
?>

<form action="?ejercicio=25" method="post">
    <select name="genero">
        <option value="0">Hombre</option>
        <option value="1">Mujer</option>
    </select>

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="edad">Edad</label>
    <input type="number" name="edad">

    <button type="submit">Enviar</button>
</form>