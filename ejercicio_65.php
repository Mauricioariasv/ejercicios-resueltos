<h1>Fechas</h1>

<?php
echo "La fecha de hoy es: " . date("d/m/Y");
echo "<br>";
echo "La hora actual es: " . date("H:i:s");
echo "<br>";
echo "<br>";
?>

<?php 
$fecha=date("L");
if ($fecha==1) {
    echo "Año bisiesto " . date("Y");
}
else {
    echo "Año no bisiesto " . date("Y");
}
echo "<br>";
echo "Día de la semana: ";
$fecha=date("w");
switch ($fecha) {
 case 0: echo "domingo";
 break;
 case 1: echo "lunes";
 break;
 case 2: echo "martes";
 break;
 case 3: echo "miércoles";
 break;
 case 4: echo "jueves";
 break;
 case 5: echo "viernes";
 break;
 case 6: echo "sábado";
 break;
}
?>