<h1>Blucle While</h1> 

<form action="?ejercicio=21" method="post">
    Escribe un numero para el bucle: 
    <input type="text" name="numero" id="">
    <input type="submit" value="enviar">
</form>

<?php

if($_POST) {

    $inicial=0;
    $numero= $_POST['numero'];

    while($inicial<=$numero) {

        echo $inicial."<br>";
        $inicial++;
    }
}

?> 