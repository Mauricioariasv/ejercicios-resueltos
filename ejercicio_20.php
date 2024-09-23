<h1>Uso de variables globales</h1>

<?php
 $nrenglon = 0;

 function cell($valor) {
     global $nrenglon;

    if ($nrenglon % 2) {
        $fondo = "#ffff00";
    } else {
        $fondo = "#ffffff";
    }

    if ($valor < 0.5) {
        $color = "red";
    } else {
        $color = "blue";
    }

    $cell = '<td style="background: ' . $fondo .'; color:'. $color . '">' . $valor . "</td>";

    echo $cell;
 }
?>

<table>
<?php
 for ($x = 0; $x <= 2; $x += 0.01){
    $nrenglon++;
    echo "<tr>";
    cell($x);
    cell(sin($x));
    cell(cos($x));
    echo "</tr>";
 }
?> 

</table>