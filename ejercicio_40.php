<h1>Mostrar nombres de estudiantes de la BD </h1>
<?php
 $conex = mysqli_connect("localhost", "root", "", "usm");
 $result = mysqli_query($conex, "SELECT * FROM estudiantes");

 if($result) {
    while ($estudiante = mysqli_fetch_array($result)) {
        echo $estudiante["nombre"] . "<br>";
    }
 }