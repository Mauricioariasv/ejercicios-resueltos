<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
</head>

    <h1> Alta de alumnos </h1>
    <form action= "?ejercicio=43" method = post>
        Ingrese el nombre:
        <input type="text" name="nombre"><br><br>
        Ingrese el correo:
        <input type="text" name="correo"><br><br>
        Seleccione el curso:
        <select name="codigocurso">
            <option value="1">PHP</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
        </select>
        <br><br>
        <input type="submit" value="registrar">
    </form>
    <?php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db="test";
    
        $conexion = mysqli_connect($server, $user, $pass, $db);
        if ($conexion) 
        {
            echo "conectado";
        }
       if(isset($_POST["nombre"]))
       {
         if(strlen($_POST['nombre']) >= 1 && strlen($_POST['correo'] >= 1))
         {
            $name = trim($_POST["nombre"]);
            $email = trim($_POST["correo"]);
            $codigocurso= trim($_POST["codigocurso"]);
            $consulta ="INSERT INTO ejercicio43 ('nombre', 'correo', 'codigocurso') VALUES ('$name','$email','$codigocurso')";
            $resultado= mysqli_query($conexion,$consulta);
            if($resultado)
            {
                echo "El alumno ha sido registrado correctamente";
            }
         }
       }
      
    
    
    ?>
</body>
</html>