<?php
include('Mail.php');
    $para = 'dante@castelancarpinteyro.club';
    $asunto = 'Modifico variables de Jeremías';
    $mensaje = 'Guten Tag!';
    $remitente = "From: nerdpizza@equipo1.prog5a.com" . " /r/n" . "CC: " . $para;
    mail($para, $asunto, $mensaje, $remitente);
    echo $para . $asunto . $mensaje . $remitente;
