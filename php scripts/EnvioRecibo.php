<?php
    //require 'db.php';
    //require 'funcionEmail.php';
    function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
    {
        include('Mail.php');
        $origenDestino = "From: $remitente" . " \r\n" . "CC: " . $destinatario;
        mail($destinatario, $asunto, $mensaje, $origenDestino);
    }
    $mensaje ="
    <!DOCTYPE html>
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <p>Hola</p>
    </body>
    </html>";
    enviarEmail($destinatario = 'jeremy.hdez9@gmail.com', $remitente = "nerdpizza@equipo1.prog5a.com", $asunto = 'Prueba html', $mensaje);
    //enviarEmail($destinatario = $_POST["destinatario"], $remitente = "nerdpizza@equipo1.prog5a.com", $asunto = $_POST[""], $mensaje = "");
?>