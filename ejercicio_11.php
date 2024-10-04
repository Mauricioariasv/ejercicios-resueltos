<h1>Comparacion en PHP</h1> 

<?php 
 
$a = 8; 
$b = 3; 
$c = 3; 
$d = 4;

echo "< : menor a <br>";
echo "> : mayor a <br>";
echo "<= : menor igual a <br>";
echo ">= : mayor igual a <br>";
echo "== : igual a <br>";
echo "!= : diferente a <br>";

echo "<br>Ejemplos:<br>";

echo $d." < ".$a."<br>"; 
echo $a." > ".$b."<br>"; 
echo $a." >= ".$b."<br>"; 
echo $c." <= ".$d."<br>"; 
echo $b." == ".$c."<br>"; 
echo $c." != ".$d."<br>"; 

?>