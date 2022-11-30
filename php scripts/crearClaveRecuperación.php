<?php
include "funciónEmail.php";
$claveRecuperación = 0;
$claveRecuperaciónEmail;
$éxitoCarga;
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

function cargarClaveRecuperación($claveRecuperaciónEmail, $éxitoCarga)
{

    $destinatario = '';
    $claveRecuperaciónEmail;
    $usadaClave = false;
    $pruebaClave = true;
    $emisiónClave = "";

    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
    $consulta = "SELECT * FROM `claves`";
    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
    while ($columna = mysqli_fetch_array($resultado)) {
        if ($columna['clave_recuperación'] == $claveRecuperaciónEmail) {
            break;
            $éxitoCarga = false;
        } else {
            $consulta = "INSERT INTO `claves` (`id_clave`, `correo_clave`, `clave_recuperación`, `emisión_clave`, `usada_clave`, `prueba_clave`) VALUES ('', '$destinatario', '$claveRecuperaciónEmail', '$emisiónClave', $usadaClave, $pruebaClave)";
            $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
            $éxitoCarga = true;
        }
    }
    return $éxitoCarga;
}

if ((cargarClaveRecuperación($claveRecuperaciónEmail, $éxitoCarga)) == true) {
    enviarEmail('dante@castelancarpinteyro.club', 'nerdpizza@equipo1.prog5a.com', 'Clave de recuperación', ("Su clave de recuperación es " . $claveRecuperaciónEmail));
} else {
    echo "Hubo un error al generar y cargar su clave de recuperación, por favor, vuelva a intentarlo...";
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