<?php
$categoría = $_GET['categoría'];
$id = $_GET['id'];

switch ($categoría) {
    case 'pizzas':
        $idConsulta = "idPizza";
        break;
    case 'complementos':
        $idConsulta = "idComplementof";
        break;
    case 'bebidas':
        $idConsulta = "idBebidas";
        break;
    default:
        echo "Hubo un error";
        break;
}

include "php scripts/Conexión.php";

$consulta = "SELECT * FROM `$categoría` WHERE ";
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
