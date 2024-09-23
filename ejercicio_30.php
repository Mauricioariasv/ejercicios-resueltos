<h1>Comentarios del blog</h1>
<form action="?ejercicio=30" method="post">
    Nombre:
    <br>
    <input type="text" name="nombre">
    <br>
    Comentario:
    <br>
    <textarea cols="55" rows="4" name="comentario"></textarea>
    <br>
    Tu correo de contacto:
    <br>
    <input type="text" name="email">
    <br>
    <button type="submit">Publicar</button>
</form>
<h3 style="margin-bottom: 20px">Comentarios: </h3>
<?php

$file ="comentarios.txt";
$fp = fopen($file, "r+");

if ($_POST) {
    $comentario = $_POST['comentario'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Verificar que haya cotenido sino da error
    $filesizeTotal = filesize($file) > 0 ? filesize($file) : 1;

    $old = fread($fp, $filesizeTotal);

    $email = "<a href=\mailto:$email\">$email</a>";

    $comentario = htmlspecialchars($comentario);

    $comentario = stripslashes($comentario);

    $entry="<p><b>$nombre</b> ($email);<br>$comentario</p>\n";
    rewind($fp);

    fputs($fp, "$entry \n $old");
}
 fclose($fp);
 readfile($file);
?>

<table>
    <thead>
        <th>Pregunta</th>
        <th>Respuesta</th>
    </thead>
    <tbody>
        <tr>
            <td>¿Qué hace htmlspecialchars()? </td>
            <td>Es una herramienta esencial para prevenir ataques de Cross-Site Scripting (XSS). Su principal función es convertir caracteres especiales con significado en HTML en sus entidades HTML correspondientes.</td>
        </tr>
        <tr>
            <td>¿Qué hace stripslahses()? </td>
            <td>Se utiliza para quitar las barras invertidas () que se hayan añadido a una cadena de texto para escapar ciertos caracteres especiales.</td>
        </tr>
        <tr>
            <td>¿Qué hace readfile()? </td>
            <td>Es una herramienta muy útil cuando necesitas leer un archivo completo y enviarlo directamente al navegador. En otras palabras, readfile() te permite servir el contenido de un archivo como si fuera una página web.</td>
        </tr>
    </tbody>
</table>