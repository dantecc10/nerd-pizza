<?php
$correo = $_POST['Correo'];

include "Conexión.php";

$consulta = "SELECT  FROM `pizzas`";
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
