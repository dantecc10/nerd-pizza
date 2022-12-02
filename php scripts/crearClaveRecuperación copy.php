<?php
$claveRecuperaciónEmail;
function generaClave()
{
    $claveRecuperación=0;
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

function enviarEmail($destinatario, $remitente = "nerdpizza@equipo1.prog5a.com", $asunto = 'Prueba html', $mensaje)
{
    $destinatario = "jeremy.hdez9@gmail.com";
    $mensaje = GeneraClave();
    
    $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);
}
generaClave($claveRecuperación);

echo "Aquí ya se debió enviar el email";
?>
