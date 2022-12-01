<?php

    $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
    $basededatos = "nerdpizza";
    $db = mysqli_select_db($conexiòn,$basededatos);
    
    if (isset($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["pass"]) and $_POST["nombre"] !="" and $_POST["apellido"]!="" and $_POST["email"]!="" and $_POST["nombre"] !=""){
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $inserta = "INSERT INTO `usuarios`(`idUsuario`, `nombreU`, `apellidosU`, `emailU`, `contraseñaU`) VALUES ('$nombre','$apellido','$email','$pass');";
        } 
    else{
        echo '<p>Por favor, complete el <a href="form_php.html">formulario</a></p>';
    }
?>