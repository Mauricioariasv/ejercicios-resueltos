<h1>Cabecera y pié de página</h1>
      
<?php
    function CabeceraPagina() {
        echo '<FONT SIZE="+1">Esta cabecera estará en todas sus páginas.</FONT><BR><hr>';
    }

    function PiePagina() {
        echo '<FONT SIZE="-1">Este es el pie de página.</FONT><BR> Autor: Joaquin Gracia';
    }

    CabeceraPagina();
    PiePagina();
?>

