<h1>Redondeo en php</h1>

<?php

    echo "Para redondear nuestros calculos en php utilizamos la funcion 'round()' y como parametro le pasaremos el numero que deseamos redondear.";

    echo "<br><br>";

    echo "Por ejemplo si tenemos las siguientes notas (13.7, 9.5 y 18.4) y quisieramos redondearlas nos quedarian de la siguiente manera: ";


    //declaramos las variables o en este caso un array que contenga las 3 notas
    $notas = array(13.7, 9.5, 18.4);
    echo round($notas[0]) . ", " . round($notas[1]) . " y " . round($notas[2]);

?>