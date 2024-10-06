<h1>Encuesta</h1> 

<h3>¿Que opina de este curso de php?</h3> 

<form action="?ejercicio=31" method="post"> 

<input type="radio" name="reply" value="0"> 
Excelente, he aprendido mucho.<br> 
<input type="radio" name="reply" value="1"> 
Mas o menos, es muy complicado.<br> 
<input type="radio" name="reply" value="2"> 
¡Bah! para que quiero aprender php 
<br> <br> 

<?php

if (empty($_POST['submit']) && empty($_COOKIE['voted'])) { 
?> 

<input name="submit" type="submit" value="vota!"> 

<?php 
} else { 
    echo "<p>Gracias por tu voto.</p>\n"; 

    if (isset($_POST['reply'])) { 
        
        $file="resultados.txt"; 
        $fp=fopen($file, "r+"); 
        
        if(filesize($file) == 0) {
            $vote = $_POST["reply"];
        } else {
            $vote = fread($fp, filesize($file));
            $vote .= "," . $_POST["reply"];
        }

        rewind($fp); 
        //Escribir nueva string en el archivo 
        fputs($fp, $vote); 
        fclose($fp); 
    }
}

?> 
</form> 

<a href="resultados.txt" target="_blank">ver resultados de la encuesta</a>