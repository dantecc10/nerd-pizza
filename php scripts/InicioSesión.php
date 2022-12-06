<?php
session_start();
if (!empty($_POST['InicioSesión'])) {
    //if (!empty($_POST['Usuario']) and !empty($_POST['Contraseña'])) {
    $correoU = $_POST['correoU'];
    $contraseñaU = $_POST['contraseñaU'];
    # $latitude = $_POST['latitude'];
    # $longitude = $_POST['longitude'];
    $sql = $conexión->query("SELECT * FROM `usuarios` WHERE `emailU`='$emailU' AND `contraseñaU`='$contraseñaU'");
    if ($datos = $sql->fetch_object()) {
        $_SESSION['idUsuario'] = $datos->idUsuario;
        $_SESSION['nombreU'] = $datos->nombreU;
        $_SESSION['apellidosU'] = $datos->apellidosU;
        $_SESSION['correoU'] = $datos->correoU;
        $_SESSION['direccionU'] = $datos->direccionU;
        $NombreCompleto = ($_SESSION['Nombre'] . " " . $_SESSION['Apellidos']);

        # $sql = $conexión->query("INSERT INTO `localizaciones` VALUES ('', '$NombreCompleto', '$usuario', '$latitude', '$longitude')");

        header("location: landingExitoso.php");
    } else {
        echo "<div>Acceso denegado<div>";
    }
    //} else {
    echo "Campos vacíos";
    //}
}
