<h1>Uso de la sentencia IF</h1>
<h2 style="margin-bottom: 20px">Si es admin conceder permiso</h2>

<?php 

    $esAdmin = false;

    if($esAdmin) {
        echo "Es administrador, permiso concedido";
    } else {
        echo "No es administrador, permiso sin conceder";
    }

?>

<table>
    <thead>
        <th>Pregunta</th>
        <th>Respuesta</th>
    </thead>
    <tbody>
        <tr>
            <td>¿Qué hace la sentencia IF…ELSE?</td>
            <td>Es una estructura de control fundamental en la programación que nos permite tomar decisiones dentro de un programa.</td>
        </tr>
    </tbody>
</table>