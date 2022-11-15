<?php
function generateRandomString($length = 6)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(1, $charactersLength + 1)];
    }
    return $randomString;
}

echo generateRandomString() . " espacio";

function claveSecreto($randomString)
{
    $numClave = intval($randomString);

    $claveSecreta = $numClave * 2;

    return $claveSecreta;
}

echo  "<br>" . "Operacion: " . claveSecreto($claveSecreta);
