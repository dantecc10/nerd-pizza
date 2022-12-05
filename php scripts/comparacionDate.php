<?php
    date_default_timezone_set('America/Mexico_City');

    $navida = date('22,12,25');
    $fechaActual = date('y/m/d h:i:s');
    echo "segun es la fecha actual" . "<br>";
    echo $fechaActual;

    if ($fechaActual < $navidad) {
        echo "aun no es navidad";
    }
