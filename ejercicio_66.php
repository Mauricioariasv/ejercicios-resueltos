<h1> Validacion de fecha ingresada </h1>

<form action="?ejercicio=66.php" method="post"> 

Ingrese una fecha (dd/mm/aaaa): 
<input type="text" name="dia" size="2"> 
<input type="text" name="mes" size="2"> 
<input type="text" name="anio" size="4"> 
<br> 

<input type="submit" value="validar"> 

</form> 

<?php 

if($_POST){
    if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['anio'])){ 
        echo "La fecha ".$_POST['dia']."/".$_POST['mes']."/".$_POST['anio']." es valida"; 
    } else {
        echo "La fecha ".$_POST['dia']."/".$_POST['mes']."/".$_POST['anio']." no es valida"; 
    }
}

?> 