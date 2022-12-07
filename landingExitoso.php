<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Éxito!</title>
</head>

<body>
    Aquí sólo llega el sabio que hizo correctamente su script de PHP y está entrenado para superar el temido y malévolo error 500 de HTTP.
    <?php
    function mostrarSesión()
    {
        echo ("<br>idUsuario: " . $_SESSION['idUsuario'] . "<br>");
        echo ("nombreU: " . $_SESSION['nombreU'] . "<br>");
        echo ("apellidosU: " . $_SESSION['apellidosU'] . "<br>");
        echo ("emailU: " . $_SESSION['emailU'] . "<br>");
        #echo ("contraseñaU: " . $_SESSION['contraseñaU'] . "<br>");
        echo ("direccionU: " . $_SESSION['direccionU'] . "<br>");
    }
    mostrarSesión();
    echo ("Index: <a href='index.php'>index.php</a>");
    ?>


</body>

</html>