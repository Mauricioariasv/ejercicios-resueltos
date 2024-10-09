<h1>Ejercicio del estudiante</h1>

<p>Comparación de números usando función</p>

<?php 

function encontrarMayor($num1, $num2, $num3) {
    // Comparamos los números y asignamos el mayor a una variable
    $mayor = $num1;
    if ($num2 > $mayor) {
        $mayor = $num2;
    }
    if ($num3 > $mayor) {
        $mayor = $num3;
    }

    // Devolvemos el número mayor
    return $mayor;
}

echo "El numero más grande es " . encontrarMayor(386, 455, 1353);
?>