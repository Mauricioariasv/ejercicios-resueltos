<h1>Creacion de imágenes dinamicas</h1>

<canvas id="myCanvas" width="200" height="120" style="border:1px solid grey; background: #d2d3df"></canvas>
<?php
    $valoraleatorio=rand(100000,999999);
?> 
<script>
const numeroAleatorio = <?= $valoraleatorio ?>;
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");

ctx.font = "40px Arial";
ctx.fillStyle = "blue";
ctx.fillText(numeroAleatorio,10,80);
</script>