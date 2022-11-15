<?php
$claveRecuperación = "";
$claveRecuperaciónEmail = "";
function generaClave($claveRecuperación, $claveRecuperaciónEmail)
{
    $contadorDígitos = 0;
    $min = 0;
    $max = 9;
    $dígitoAleatorioGenerado = rand(1, $max);
    $claveRecuperación = ("$claveRecuperación" . "$dígitoAleatorioGenerado");

    while ($contadorDígitos < 5) {
        $dígitoAleatorioGenerado = rand($min, $max);
        $claveRecuperación = ("$claveRecuperación" . "$dígitoAleatorioGenerado");

        $contadorDígitos++;
    }

    #echo $claveRecuperación;
    $claveRecuperaciónEmail = $claveRecuperación;
    return $claveRecuperación;
}
generaClave($claveRecuperación, $claveRecuperaciónEmail);
echo $claveRecuperaciónEmail;
