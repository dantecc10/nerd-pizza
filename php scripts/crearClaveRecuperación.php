<?php
function generaClave()
{
    $contadorDígitos = 1;
    $min = 0;
    $max = 9;
    $dígitoAleatorioGenerado = 0;
    $claveRecuperación = "";
    while ($contadorDígitos < 7) {
        #if ($contadorDígitos = 1) {
        #    $dígitoAleatorioGenerado = rand(1, $max);
        #} else {
        #    $dígitoAleatorioGenerado = rand($min, $max);
        #}
        $dígitoAleatorioGenerado = rand($min, $max);
        $claveRecuperación = ("$claveRecuperación" . "$dígitoAleatorioGenerado");

        $contadorDígitos++;
    }
    echo $claveRecuperación;
}
generaClave();
