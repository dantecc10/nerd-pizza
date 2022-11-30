<?php
include "funciónEmail.php";
$claveRecuperación = 0;
$claveRecuperaciónEmail;
function generaClave($claveRecuperación)
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

    # echo $claveRecuperación; #Comento la impresión para obtener sólo el valor
    return $claveRecuperación;
}
$claveRecuperaciónEmail = generaClave($claveRecuperación);
echo "Aquí se va a enviar el email";
enviarEmail('dante@castelancarpinteyro.club', 'nerdpizza@equipo1.prog5a.com', 'Clave de recuperación', ("Su clave de recuperación es " . $claveRecuperaciónEmail));
echo "Aquí ya se debió enviar el email";

function cargarClaveRecuperación($claveRecuperaciónEmail)
{
    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
}


$consulta = "SELECT * FROM `claves`";
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($resultado)) {
}
/*

function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
include('Mail.php');
$origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
mail($destinatario, $asunto, $mensaje, $origenDestino);
}
generaClave($claveRecuperación, $claveRecuperaciónEmail);
?> */