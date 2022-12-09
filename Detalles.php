<?php
$categoría = $_GET['categoria'];
$id = $_GET['id'];

include "php scripts/Conexión.php";

$consulta = "SELECT COUNT(*) FROM `$categoría`";
$cantidad = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
echo $cantidad;
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
