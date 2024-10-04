<h1>Análisis de formulario</h1> 


<form action="?ejercicio=26" method="post" style="margin-bottom: 10px">
    <input type="radio" name="genero" value="0">Masculino <br>
    <input type="radio" name="genero" value="1">Femenino<br>
    <br>Su nombre:<br>
    <input type="text" name="nombre" id=""><br>
    <br>Su apellido:<br>
    <input type="text" name="apellido" id=""><br>
    <br>
    <input type="submit" name="enviar" value="enviar">
</form>


<?php

if($_POST){
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
}

if(isset($_POST['genero']) && isset($_POST['nombre']) && isset($_POST['apellido']) !=""){
    if($_POST['genero'] == 0){
        echo "Bienvenido Sr. ".$nombre." ".$apellido;
    } else {
        echo "Bienvenida Sra. ".$nombre." ".$apellido;
    }

    echo "<br>Que tengas un buen dia!";
} else{
    if(isset($_POST['enviar'])){
    echo "Por favor rellene los datos";
    }
}

?>