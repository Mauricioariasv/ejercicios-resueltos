<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios resueltos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<div class="content">
    <h1>Ejercicios resueltos</h1>

    <h3>Integrantes: </h3>

    <ul class="members">
        <li>Mauricio Arias</li>
        <li>Jesús Garcés</li>
        <li>Carla Padrón</li>
        <li>Fabiana Mora</li>
    </ul>

    <ul>
    <?php for($i = 0; $i < 69; $i++) { 
        $num = $i + 1;
    ?>
        <li><a target="_blank" href="ejercicio_<?= $num ?>.php">Ejercicio número: <?= $num ?></a></li>
    <?php  } ?>
    </ul>
</div>

<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body, html {
        min-height: 100%;
        font-family: "Montserrat", sans-serif
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 20px;
        background: #f5f3f4
    }
    
    .content {
        width: 100%;
        max-width: 500px;
    }

    h1 {
        font-size: 48px;
    }

    h3 {
        font-size: 24px;
        margin: 20px 0 40px;
    }

    ul {
        list-style: none;
    }

    .members {
        margin-bottom: 40px
    }

    .members li {
        display: flex;
        align-items: center;
        gap: 8px
    }

    .members li::before {
        content: '';
        display: block;
        height: 6px;
        width: 6px;
        transform: rotate(45deg);
        background: #13315c;
    }

    ul:not(.members) {
        background: #fff;
        padding: 20px 40px;
        border-radius: 8px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    a {
        text-decoration: none;
        padding: 20px;
        border-bottom: 1px solid #13315c;
        color: #000;
        display: inline-block;
        width: 100%;
        transition: 300ms;
    }

    a:hover {
        background: #eef4ed;
        transform: scale(1.05);
        border-color: transparent
    }

    ul li:last-child a {
        border: unset
    }
</style>

    
</body>
</html>