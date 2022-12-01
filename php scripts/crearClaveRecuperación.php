<?php

function madreFunciones()
{
    # Generación de clave
    function generaClave()
    {
        # $contadorDígitos = 0;
        $min = 100000;
        $max = 999999;
        # $dígitoAleatorioGenerado = rand(1, $max);
        $claveRecuperación = rand($min, $max);

        # echo $claveRecuperación;
        return $claveRecuperación;
    }

    $claveRecuperaciónEmail = generaClave();
    echo ("Aquí está la clave de recuperación heredada de la función generadora: " . $claveRecuperaciónEmail);

    # Carga a base de datos

    # Envío de email y clave validada
    # Sección de email
    include('Mail.php');
    $mensaje = ("Nerd Pizza ha recibido una solicitud de reestablecimiento de contraseña; ingresa el siguiente código para poder cambiar tu contraseña: " . $claveRecuperaciónEmail . ".");
    $remitente = "nerdpizza@equipo1.prog5a.com";
    $destinatario = "dante@castelancarpinteyro.club, jeremy.hdez9@gmail.com";
    $asunto = "Reestablecimiento de contraseña";

    $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);

    echo ("Aquí ya se envió la clave... se supone");
}
madreFunciones();
