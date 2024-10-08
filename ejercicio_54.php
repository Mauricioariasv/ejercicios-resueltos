<h1>Paramatros en hipervinculo</h1>

<?php

    echo "<a href='?ejercicio=54&tabla=2'> Tabla del 2</a> <br>";
    echo "<a href='?ejercicio=54&tabla=5'> Tabla del 5</a> <br>";
    echo "<a href='?ejercicio=54&tabla=7'> Tabla del 7</a> <br>";

    if (isset($_GET['tabla'])){

        echo "<h2>Listado de la tabla del $_GET[tabla] <br></h2>";

        for($i=1; $i<=10; $i++){
            $resultado = $i * $_GET['tabla'];
            echo $_GET['tabla'] . " * " . $i . " = " . $resultado;
            echo "<br>";
        }
    }

?>