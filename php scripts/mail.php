<?php
include('Mail.php');
    $para = 'jeremy.hdez9@gmail.com';
    $asunto = 'Prueba 1';
    $mensaje = '¿Ves esto?';
    $remitente = "From: nerdpizza@equipo1.prog5a.com" . " \r\n" . "CC: " . $para;
    mail($para, $asunto, $mensaje, $remitente);
    echo $para . $asunto . $mensaje . $remitente;
?>