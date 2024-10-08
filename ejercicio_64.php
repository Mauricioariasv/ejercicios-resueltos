<h1>Captcha en html</h1>

<?php
    $valoraleatorio=rand(100000,999999);
    
    if(isset($_POST["numero"])) {
        if($_POST["numero"] == $_SESSION["numero"]) {
            echo '<p style="color:green; font-weight: 700">Recaptcha válido!!!</p>';
        } else {
            echo '<p style="color:red; font-weight: 700">Recaptcha inválido!!!</p>';
        }
    }

    $_SESSION["numero"] = $valoraleatorio;
?> 

<form method="post">

    <canvas id="myCanvas" width="200" height="120" style="border:1px solid grey;background: #d2d3df"></canvas>

    <div>
        Digitos verificadores:
        <br>
        Ingrese su valor:
        <input type="text" name="numero">
        <br>
        <input type="submit" value="verficar">
    </div>
</form>

<script>
const numeroAleatorio = <?= $valoraleatorio ?>;
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");

ctx.font = "40px Arial";
ctx.fillStyle = "blue";
ctx.fillText(numeroAleatorio,10,80);
</script>
