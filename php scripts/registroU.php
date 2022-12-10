<?php

$conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
$basededatos = "nerdpizza";
$db = mysqli_select_db($conexión, $basededatos) or
    die("No se ha podido conectar al servidor de Base de Datos");

if (isset($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["pass"], $_POST["direccion"]) and $_POST["nombre"] != "" and $_POST["apellido"] != "" and $_POST["email"] != "" and $_POST["pass"] != "" and $_POST["direccion"] != "") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $direccion = $_POST["direccion"];
    $sql = $conexión->query("INSERT INTO usuarios VALUES ('','$nombre','$apellido','$email','$pass','$direccion');");

    header("location: 2stepVerification.php");
} else {
    echo '<p>Por favor, complete el <a href="Registro.php">Registro</a></p>';
}





?>
<?php
#if (!empty($_POST['formRegistro'])) {
#    session_start();
#    //if (!empty($_POST['Usuario']) and !empty($_POST['Contraseña'])) {
#    $nombre = $_POST['nombre'];
#    $apellido = $_POST['apellido'];
#    $email = $_POST['email'];
#    $pass = $_POST['pass'];
#    $pass2 = $_POST['pass2'];
#    $direccion = $_POST['direccion'];
#
#    if ($pass != $pass2) {
#        header("Location: Registro.php");
#        echo "Las contraseñas no coinciden...";
#    } else {
#        $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
#    }
#
#    $sql = $conexión->query("INSERT INTO usuarios VALUES ('','$nombre','$apellido','$email','$pass','$direccion')");
#    
#    if ($datos = $sql->fetch_object()) {
#        $_SESSION['idUsuario'] = $datos->idUsuario;
#        $_SESSION['nombreU'] = $datos->nombreU;
#        $_SESSION['apellidosU'] = $datos->apellidosU;
#        $_SESSION['emailU'] = $datos->emailU;
#        $_SESSION['direccionU'] = $datos->direccionU;
#        $NombreCompleto = ($_SESSION['nombreU'] . " " . $_SESSION['apellidosU']);
#        $_SESSION['NombreCompleto'] = ($_SESSION['nombreU'] . " " . $_SESSION['apellidosU']);
#
#        setcookie("Sesión", "Iniciada", time() + 24 * 3600, "/", "equipo1.prog5a.com");
#
#        # $sql = $conexión->query("INSERT INTO `localizaciones` VALUES ('', '$NombreCompleto', '$usuario', '$latitude', '$longitude')");
#
#        header("location: ../landingExitoso.php");
#    } else {
#        echo "<div>Acceso denegado<div> o";
#        echo "Campos vacíos";
#    }
#    //} else {
#    //}
#}
#