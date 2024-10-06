<h1>Eliminar Registro</h1> 

<form action="?ejercicio=46" method="post">

    Escriba el id del registro que desea borrar: 
    <input type="text" name="id" id="">

    <input type="submit" value="borrar">
    
</form>

<?php

if($_POST) {
    $servidor="localhost";
    $usuario="root";
    $password="";
    $database="usm";
    
    $conexion= new mysqli($servidor, $usuario, $password, $database);
    $iden=$_POST['id'];
    $sql="DELETE FROM estudiantes WHERE id=$iden";
    
    if($conexion->query($sql)==TRUE){
        echo "Registro del id #".$iden." borrado";
    } else {
        echo "Hubo un error al borrar";
    }
}


?>