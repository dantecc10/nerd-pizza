<?php
function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
    include('Mail.php');
    $origenDestino = "From: $remitente" . " \r\n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);
}

enviarEmail('dantecc10@gmail.com', 'nerdpizza@equipo1.prog5a.com', 'Esto llega de inmediato', 'hola');
#$para = 'jeremy.hdez9@gmail.com';
#$asunto = 'Prueba 1';
#$mensaje = '¿Ves esto?';
#mail($para, $asunto, $mensaje, $remitente);
#echo $para . $asunto . $mensaje . $remitente;
