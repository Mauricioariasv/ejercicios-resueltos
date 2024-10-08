<h1> Tabla de senos y cosenos 2</h1>
<p> Se mostraran los valores obtenidos en el rango 0 - 2</p>
<br>
<?php   //lo que se escriba acá será en php
    function mostrar_color($valor,$fila)
    {
        //Filas pares se imprimiran con un fondo verde claro
        if($fila % 2 == 0){
            $fondo = "lightgreen";
        }
        //filas impares se imprimiran con un fondo gris claro
        else{
            $fondo = "lightgray";
        }
        //Los resultados positivos se imprimiran en texto azul
        if( $valor >= 0)
        {
            $color = "blue";
        }
        //Los resultados negativos se imprimiran en texto rojo
        else
        {
            $color = "red";
        }
        echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>";
    }
    echo "<table border=1>";
    echo"<th>Senos</th>";
    echo"<th>Cosenos</th>";
    $fila_actual = 0;
    for ($i = 0; $i <= 2; $i = $i +0.01) 
    {
        $fila_actual = $fila_actual + 1;
        echo "<tr>";
        $x=sin($i);
        mostrar_color($x,$fila_actual);
        $y=cos($i);
        mostrar_color($y,$fila_actual);
        echo "</tr>";
        
        
    }
    echo "</table>";
?>