<?php
    //require 'db.php';
    //require 'funcionEmail.php';

    enviarEmail($destinatario, $remitente = "nerdpizza@equipo1.prog5a.com", $asunto = 'Prueba html', $mensaje);
    $destinatario = $_POST["email"];
    $mensaje = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];
    function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
    {
        include('Mail.php');
        $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
        mail($destinatario, $asunto, $mensaje, $origenDestino);
    }
    //enviarEmail($destinatario = $_POST["destinatario"], $remitente = "nerdpizza@equipo1.prog5a.com", $asunto = $_POST[""], $mensaje = "");
?>