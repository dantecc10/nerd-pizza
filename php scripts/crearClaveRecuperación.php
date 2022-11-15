<?php


function generaClave()
{
    $contadorDígitos = 1;
    $min = 0;
    $max = 9;
    $dígitoAleatorioGenerado = 0;
    $claveRecuperación = "";
    while ($contadorDígitos < 6) {
        if ($contadorDígitos == 1) {
            $dígitoAleatorioGenerado = rand(1, $max);
        } else {
            $dígitoAleatorioGenerado = rand($min, $max);
        }

        $claveRecuperación = ("" . $dígitoAleatorioGenerado);

        $contadorDígitos++;
    }
    echo $claveRecuperación;
}
