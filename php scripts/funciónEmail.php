<?php
function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
    include('Mail.php');
    $origenDestino = "From: $remitente" . " \r\n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);
}

/*Esta línea manda llamar la función de enviar correos, y le pasa los parámetros necesarios para enviar el email. 
#enviarEmail('jcmherrera@hotmail.com', 'nerdpizza@equipo1.prog5a.com', 'Esto deberia llegar de inmediato', 'Saludos desde un correo del servidor, licenciado Juan Carlos.');*/

/*Pasos para usar esta función:
    1.- Incluye esta función con include('funciónEmail');
    2.- Prepara las siguientes variables en tu página PHP:
        a)$destinatario
        b)$remitente
        c)$asunto
        d)$mensaje
    3.- Cuando tengas todo listo; envía el correo con la siguiente línea:
        - enviarEmail($destinatario, $remitente, $asunto, $mensaje);
    4-. Presúmelo a los demás ;-D
*/