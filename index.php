<?php session_start() ?>


<!-- Para el ejercicio 27 -->
<?php
if (isset($_POST['pw'])) {
 $pw = $_POST['pw'];
 if ($pw == "magic") {
 header ("Location: ejercicio_27_page_1.html");
 } elseif ($pw == "abracadabra" ){
 header ("Location: ejercicio_27_page_2.html");
 } else {
 header ("Location: ejercicio_27_page_3.html");
 }
}
?>

<!-- Para el ejercicio 62 -->
<?php
if(isset($_REQUEST["direccion"]))
header("Location: http://{$_REQUEST["direccion"]}");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios resueltos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
</head>
<body>

<?php
    // Ejercicio seleccionado
    $ejercicio = isset($_GET["ejercicio"]) ? intval($_GET["ejercicio"]) : 1;
?>

<nav class="ejercicios">
    <h3>Integrantes: </h3>

    <ul class="miembros">
        <li>Mauricio Arias</li>
        <li>Carla Padrón</li>
        <li>Fabiana Mora</li>
        <li>Eugenia Yoris</li>
    </ul>

    <ul class="items">
        <?php for($i = 0; $i < 69; $i++) { 
            $num = $i + 1;
        ?>
            <li><a href="?ejercicio=<?= $num ?>.php">Ejercicio número: <?= $num ?></a></li>
        <?php  } ?>
    </ul>
</nav>
<div class="contenido">
    <?php include_once "ejercicio_$ejercicio.php" ?>
</div>
    
</body>
</html>