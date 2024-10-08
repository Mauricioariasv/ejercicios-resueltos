<h1>Funcion sprintf()</h1>

<?php
/* 
Programa que convertira la combinacion de RGB a un color en formato hexadecimal
*/

    function retornarColorHexa($red, $green, $blue){
        $color = sprintf("#%02X%02X%02X", $red, $green, $blue); //formateo de string
        return $color;
    }

?>

<table border=1>
    <tr>
        <td bgcolor="<?php echo retornarColorHexa(255, 0, 0)?>">Cuadro rojo</td>
        <td bgcolor="<?php echo retornarColorHexa(0, 255, 0)?>">Cuadro verde</td>
        <td bgcolor="<?php echo retornarColorHexa(0, 0, 255)?>">Cuadro azul</td>
    </tr>
</table>