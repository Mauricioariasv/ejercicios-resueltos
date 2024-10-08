<?php
            $conexion=mysqli_connect("localhost","root","", "usm");
            $registros=mysqli_query($conexion, "update estudiantes
            set correo='$_REQUEST[mailnuevo]'
            where correo='$_REQUEST[mailviejo]'");
            echo "El mail fue modificado con exito";
        ?>