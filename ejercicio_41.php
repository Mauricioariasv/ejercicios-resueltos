<h1>Tablas de base de datos</h1> 
<?php
$servidor="localhost";
$usuario="root";
$password="";
$database="usm";
$conexion= new mysqli($servidor, $usuario, $password, $database);
?>

<table class="table">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    
        <?php

        $sql="SELECT * FROM estudiantes";
        $resultado=$conexion->query($sql);

        if($resultado->num_rows>0){
    
            echo "Hay registros<br/>";
            echo "<br/>";
            
        
            for ($i = 0; $i <= $mostrar=$resultado->fetch_assoc(); $i++) { 
        ?>

        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>
        </tr>

        <?php
            }
        }
        ?>

</table>