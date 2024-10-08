
En esta página definimos el color de fondo indicando la cantidad de rojo,verde
y azul, en formato decimal y solicitando a la función printf que haga la
conversión a hexadecimal. Recordemos que la propiedad bgcolor de la
marca body, lo requiere en hexadecimal.<br><br>
<a href="ejercicio_68_page_3.php">último ejemplo</a> 

<style>
    body {
        background: <?= printf("#%X%X%X",150,150,0); ?>
    }
</style>
