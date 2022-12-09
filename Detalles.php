<?php
$categoría = $_GET['categoria'];
$id = $_GET['id'];

include "php scripts/Conexión.php";

$consulta = "SELECT COUNT(*) FROM `$categoría` AS total";
$cantidad = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
echo $columna['total'];
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
