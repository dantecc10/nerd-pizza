<?php
include "funciónEmail.php";
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

    echo $claveRecuperación;
    return $claveRecuperación;
}

echo "Aquí se va a enviar el email";
enviarEmail('dante@castelancarpinteyro.club', 'nerdpizza@equipo1.prog5a.com', 'Clave de recuperación', ("Su clave de recuperación es " . generaClave($claveRecuperación, $claveRecuperaciónEmail)));
echo "Aquí ya se debió enviar el email";

/* 

function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
    include('Mail.php');
    $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);
}
generaClave($claveRecuperación, $claveRecuperaciónEmail);
?> */