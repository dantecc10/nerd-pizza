<?php
if (!empty($_POST['InicioSesión'])) {
    session_start();
    //if (!empty($_POST['Usuario']) and !empty($_POST['Contraseña'])) {
    $emailU = $_POST['emailU'];
    $contraseñaU = $_POST['contraseñaU'];
    # $latitude = $_POST['latitude'];
    # $longitude = $_POST['longitude'];
    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");

    $sql = $conexión->query("SELECT * FROM `usuarios` WHERE `emailU`='$emailU' AND `contraseñaU`='$contraseñaU'");
    if ($datos = $sql->fetch_object()) {
        $_SESSION['idUsuario'] = $datos->idUsuario;
        $_SESSION['nombreU'] = $datos->nombreU;
        $_SESSION['apellidosU'] = $datos->apellidosU;
        $_SESSION['emailU'] = $datos->emailU;
        $_SESSION['direccionU'] = $datos->direccionU;
        $NombreCompleto = ($_SESSION['nombreU'] . " " . $_SESSION['apellidosU']);
        $_SESSION['NombreCompleto'] = ($_SESSION['nombreU'] . " " . $_SESSION['apellidosU']);

        

        # $sql = $conexión->query("INSERT INTO `localizaciones` VALUES ('', '$NombreCompleto', '$usuario', '$latitude', '$longitude')");

        header("location: ../landingExitoso.php");
    } else {
        echo "<div>Acceso denegado<div> o";
        echo "Campos vacíos";
    }
    //} else {
    //}
}
