<h1> Album de fotos en linea </h1>

<h2> Cargar foto para el album </h2>

<form action='?ejercicio=34' method="post" enctype="multipart/form-data">
    <input type="file" name="archivo" accept="image/*">
    <input type="submit" name="submit" value="Cargar imagen">
</form>

<?php
    $path=""; // Indicar ruta
    if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
        $maxsize = 200000; // Indicar tamaño en bytes
        $tempname = $_FILES['archivo']['tmp_name'];
        $filename = $_FILES['archivo']['name'];
        $filesize = $_FILES['archivo']['size'];
        $filetype = GetImageSize( $tempname );
        if ($filesize <= $maxsize) { // Archivo demasiado grande?
            if (move_uploaded_file($tempname, $path.$filename)) {
            echo "<p>El archivo se ha cargado <b>con exito</b>.
            Tamaño de archivo: <b>$filesize</b> bytes,
            Nombre de imagen: <b>$filename</b><br></p>";
            } 
            else {
                echo "<p>No se ha podido cargar el archivo.</p>";
            }
        } 
        else {
        echo "<p>El archivo tiene mas de <b>$maxsize bytes</b> y es demasiado grande.</p>";
        }
        echo "<form action='?ejercicio=34' method='post'>
        <input type='submit' value='OK'></form>";
        echo "<p><img style='max-width: 60%' src='$filename'><br></p>\n";
    }