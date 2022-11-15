<?php
$claveRecuperación = "";
function generaClave($claveRecuperación)
{
    $contadorDígitos = 0;
    $min = 0;
    $max = 9;
    $dígitoAleatorioGenerado = 0;


    $dígitoAleatorioGenerado = rand(1, $max);
    $claveRecuperación = ("$claveRecuperación" . "$dígitoAleatorioGenerado");
    while ($contadorDígitos < 5) {
        $dígitoAleatorioGenerado = rand($min, $max);
        $claveRecuperación = ("$claveRecuperación" . "$dígitoAleatorioGenerado");

        $contadorDígitos++;
    }
    echo $claveRecuperación;
}
generaClave($claveRecuperación);
echo $claveRecuperación;
