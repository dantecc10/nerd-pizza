<?php
    require 'db.php';
    $para = 'dantecc10@gmail.com';
    $asunto = 'Prueba 1';
    $mensaje = '¿Ves esto?';
    $remitente = "From: nerdpizza@email.com";
    mail($para, $asunto, $mensaje);
?>