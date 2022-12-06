<?php

$conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
$basededatos = "nerdpizza";
$db = mysqli_select_db($conexión, $basededatos) or die("No se ha podido conectar al servidor de Base de Datos");

if (isset($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["pass"], $_POST["direccion"]) and $_POST["nombre"] != "" and $_POST["apellido"] != "" and $_POST["email"] != "" and $_POST["pass"] != "" and $_POST["direccion"] != "") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $direccion = $_POST["direccion"];
    $insert = "INSERT INTO usuarios VALUES ('','$nombre','$apellido','$email','$pass','$direccion');";
} else {
    echo '<p>Por favor, complete el <a href="Registro.php">Registro</a></p>';
}
