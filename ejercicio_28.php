<h1>Feedback-Mailer</h1>
<p>¡Enviame un e-mail!</p>
<form action="?ejercicio=28" method="post">
    Tu direcciòn de e-mail: <br>
    <input type="text" name="Mail" ><br>
        Tu comentario: <br>
        <textarea name="message" cols="50" rows="5">
        </textarea><br>
    <input type="submit" value="Enviar">
</form>
<?php
    $receiverMail = "mauricioariasalfonzo@gmail.com"; // escribe aqui tu direcciòn
    if (isset($_POST['Mail']) && $_POST['Mail'] != "") 
    {
        echo "Enviado";
        // if (mail ($receivermail, "¡Tienes correo nuevo!", $_POST['message'], "From:
        //     $_POST[Mail]")) 
        // {
        //     echo "<p>Gracias por enviarme tu opiniòn.</p>\n";
        // } else {
        //     echo "<p>Lo siento, ha ocurrido un error.</p>\n";
        // }
    }
?>