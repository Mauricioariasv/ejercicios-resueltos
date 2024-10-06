<h1>Subir archivo</h1> 

<form action="?ejercicio=56" method="post" enctype="multipart/form-data"> 
Seleccione el archivo: 
<input type="file" name="foto" accept="image/*"><br> 
<input type="submit" value="Enviar"> 

</form>

<?php

if($_FILES) {
    copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']); 
    echo "La foto se registro en el servidor.<br>"; 
    $nom=$_FILES['foto']['name']; 
    echo "<img  style=\"max-width: 70%\" src=\"$nom\">"; 
}

?> 