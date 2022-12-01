<?php

function madreFunciones()
{
    # Generación de clave
    function generaClave()
    {
        # $contadorDígitos = 0;
        $min = 100000;
        $max = 999999;
        # $dígitoAleatorioGenerado = rand(1, $max);
        $claveRecuperación = rand($min, $max);

        # echo $claveRecuperación;
        return $claveRecuperación;
    }

    $claveRecuperaciónEmail = generaClave();
    echo ("Aquí está la clave de recuperación heredada de la función generadora: " . $claveRecuperaciónEmail);

    # Carga a base de datos
    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
    $consulta = "SELECT count(*) FROM `claves` WHERE `clave_recuperación`=$claveRecuperaciónEmail";

    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

    if ($resultado == 0) {
        echo "Validación exitosa";
    } else {
        echo "Algo anda mal en la comparación de claves o resultó ser 123456";
    }

    echo ('<tr>');
    echo ('<th>`id_clave`</th>');
    echo ('<th>`correo_clave`</th>');
    echo ('<th>`clave_recuperación`</th>');
    echo ('<th>`emisión_clave`</th>');
    echo ('<th>`usada_clave`</th>');
    echo ('<th>`prueba_clave`</th>');
    echo ('</tr>');
    while ($columna = mysqli_fetch_array($resultado)) {
        echo ("<tr>");

        echo ("<td>" . $columna['id_clave'] . "</td>");
        echo ("<td>" . $columna['correo_clave'] . "</td>");
        echo ("<td>" . $columna['clave_recuperación'] . "</td>");
        echo ("<td>" . $columna['emisión_clave'] . "</td>");
        echo ("<td>" . $columna['usada_clave'] . "</td>");
        echo ("<td>" . $columna['prueba_clave'] . "</td>");

        echo ("</tr>");
    }

    # Envío de email y clave validada
    # Sección de email
    include('Mail.php');
    $mensaje = ("Nerd Pizza ha recibido una solicitud de reestablecimiento de contraseña; ingresa el siguiente código para poder cambiar tu contraseña: " . $claveRecuperaciónEmail . ".");
    $remitente = "nerdpizza@equipo1.prog5a.com";
    $destinatario = "dante@castelancarpinteyro.club, jeremy.hdez9@gmail.com";
    $asunto = "Reestablecimiento de contraseña";

    $origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
    mail($destinatario, $asunto, $mensaje, $origenDestino);

    echo ("Aquí ya se envió la clave... se supone");
}
madreFunciones();
