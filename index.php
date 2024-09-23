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

    $ejercicio = isset($_GET["ejercicio"]) ? intval($_GET["ejercicio"]) : 5;
?>

<nav class="ejercicios">
    <h3>Integrantes: </h3>

    <ul class="miembros">
        <li>Mauricio Arias</li>
        <li>Jesús Garcés</li>
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