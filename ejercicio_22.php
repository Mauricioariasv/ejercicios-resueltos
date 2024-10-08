<h1>Bucle</h1>

<form action="?ejercicio=22" method="post">
¿Cuantas veces?
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>
<p>
<?php
 /* Mostraremos el uso de la sentencia While y comenzamos a usar entrada
 del teclado mediante un formulario simple */
if ( isset( $_POST['number'] )) {
 $number = $_POST['number'];
 $counter = 1;
 while ($counter <= $number) {
 echo "<b>$counter</b>.- Bucle<br>\n";
 $counter++;
 }
 echo "FIN\n";
}
?>
</p>