<?php
include "funciónEmail.php";
$claveRecuperación = 0;
$claveRecuperaciónEmail;
$éxitoCarga;

$destinatario = $_POST['CorreoRecuperación'];

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
function cargarClaveRecuperación($claveRecuperaciónEmail, $éxitoCarga, $destinatario)
{
    $pruebaClave = true;

    $emisiónClave = new DateTime('now');

    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
    $consulta = "SELECT COUNT(*) `id_clave` FROM `claves` WHERE `clave_recuperación` <> $claveRecuperaciónEmail";
    $total = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
    echo $total;
    if ($total != 0) {
        enviarEmail($destinatario, 'nerdpizza@equipo1.prog5a.com', 'Clave de recuperación', ("Su clave de recuperación es " . $claveRecuperaciónEmail));
    } else {
        echo "Hubo un error al generar y cargar su clave de recuperación, por favor, vuelva a intentarlo...";
        #echo $éxitoCarga;
    }
}
#while ($columna = mysqli_fetch_array($resultado)) {
#    if ($columna['clave_recuperación'] == $claveRecuperaciónEmail) {
#        $usadaClave = true;
#        break;
#        $éxitoCarga = false;
#    } else {
#        $usadaClave = false;
#        $consulta = "INSERT INTO `claves` (`id_clave`, `correo_clave`, `clave_recuperación`, `emisión_clave`, `usada_clave`, `prueba_clave`) VALUES ('', '$destinatario', '$claveRecuperaciónEmail', '$emisiónClave', $usadaClave, $pruebaClave)";
#        echo $consulta;
#        $resultado = mysqli_query($conexión, $consulta) or die("Error en la inserción de la clave de recuperación");
#        $éxitoCarga = true;
#    }
#}
#return $éxitoCarga;
#}
$claveRecuperaciónEmail = generaClave($claveRecuperación);
cargarClaveRecuperación($claveRecuperaciónEmail, $éxitoCarga, $destinatario);
    
    #cargarClaveRecuperación($claveRecuperaciónEmail, $éxitoCarga, $destinatario);
    #if (($éxitoCarga) == true) {
        #    enviarEmail($destinatario, 'nerdpizza@equipo1.prog5a.com', 'Clave de recuperación', ("Su clave de recuperación es " . $claveRecuperaciónEmail));
        #} else {
            #    echo "Hubo un error al generar y cargar su clave de recuperación, por favor, vuelva a intentarlo...";
            #    echo $éxitoCarga;
            #}
            
            


/*

function enviarEmail($destinatario, $remitente, $asunto, $mensaje)
{
include('Mail.php');
$origenDestino = "From: $remitente" . " /r/n" . "CC: " . $destinatario;
mail($destinatario, $asunto, $mensaje, $origenDestino);
}
generaClave($claveRecuperación, $claveRecuperaciónEmail);
?> */