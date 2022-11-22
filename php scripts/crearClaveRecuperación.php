<?php
include 'funciónEmail.php';
$claveRecuperación = 0;
$claveRecuperaciónEmail;
function generaClave($claveRecuperación, $claveRecuperaciónEmail)
{
    $contadorDígitos = 0;
    $min = 0;
    $max = 9;
    $dígitoAleatorioGenerado = rand(1, $max);
    $claveRecuperación = ($claveRecuperación . $dígitoAleatorioGenerado);

    while ($contadorDígitos < 5) {
        $dígitoAleatorioGenerado = rand($min, $max);
        $claveRecuperación = ($claveRecuperación . $dígitoAleatorioGenerado);

        $contadorDígitos++;
    }
    #return $claveRecuperación;
    echo $claveRecuperaciónEmail;
    #$mensaje = ("Hola, somos del equipo de Nerd Pizza.
    #/nRecibimos una solicitud de reestablecimiento de tu contraseña, para eso, deberás ingresar la siguiente clave de recuperación en equipo.prog5a.com/Restablecer.php.
    #/nSi no has sido tú, ignora este mensaje.");
    #enviarEmail('dantecc10@gmail.com', 'nerdpizzza@equipo1.prog5a.com', 'Clave de recuperación', $mensaje);
}
function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
    include('Mail.php');
    $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);
}


generaClave($claveRecuperación, $claveRecuperaciónEmail);
