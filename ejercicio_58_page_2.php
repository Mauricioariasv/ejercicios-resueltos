<?php
    if ($_REQUEST['opcion']=="recordar")
    setcookie("mail",$_REQUEST['mailusuario'],time()+(60*60*24*365),"/");
    elseif ($_REQUEST['opcion']=="norecordar")
    setcookie("mail","",time()-1000,"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
</head>
<body>
<?php
    if ($_POST['opcion']=="recordar")
        echo "cookie creada";
    elseif ($_POST['opcion']=="norecordar")
        echo "cookie eliminada";
?>
<br>
<a href="http://localhost/ejercicios-resueltos/?ejercicio=58">Ir a la otra página</a>