<h1>Alta de Alumnos</h1>
<form action="?ejercicio=43" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
        Ingrese mail:
    <input type="text" name="mail"><br>
        Seleccione el curso:
        <select name="curso_id">
            <option value="1">Matemática</option>
            <option value="2">Físca</option>
            <option value="3">Estadística</option>
        </select>
        <br>
    <input type="submit" value="Registrar">
</form>
<?php

if(isset($_POST["nombre"])) {
    $conexion=mysqli_connect("localhost","root","", "usm");
    mysqli_query($conexion, "insert into estudiantes(nombre,correo,curso_id) VALUES
    ('$_POST[nombre]','$_POST[mail]',$_POST[curso_id])");
    echo "El alumno fue dado de alta.";
}
?>
    
    