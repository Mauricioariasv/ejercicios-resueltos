<?php
if ($_POST['radio'] == "rojo") {
    setcookie("color", "#ff0000", time() + 60 * 60 * 24 * 365, "/");
} elseif ($_POST['radio'] == "verde") {
    setcookie("color", "#00ff00", time() + 60 * 60 * 24 * 365, "/");
} elseif ($_POST['radio'] == "azul") {
    setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
}
?>

<html>
<head>
    <title>Problema</title>
</head>
<body>
    <p>Se creó la cookie.</p>
    <a href="/ejercicios-resueltos/?ejercicio=57">Ir a la otra página</a>
</body>
</html>