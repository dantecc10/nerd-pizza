<?php
$categoría = $_GET['categoría'];
$id = $_GET['id'];

switch ($categoría) {
    case 'pizzas':
        $idConsulta = "idPizza";
        break;
    case 'complementos':
        $idConsulta = "idComplemento";
        break;
    case 'bebidas':
        $idConsulta = "idBebidas";
        break;
    default:
        echo "Hubo un error";
        break;
}

include "php scripts/Conexión.php";

$consulta = "SELECT * FROM `$categoría` WHERE `$idConsulta` = $id";
echo $consulta;
$resultado = mysqli_query($conexión, $consulta) or die($error = true);

if ($error == true) {
    echo "Algo salió mal en la base de datos.";
}


#while ($columna = mysqli_fetch_array($resultado)) {
#    $idProducto = $columna['idPizza'];
#    $nombrePizza = $columna['nombrePizza'];
#    $ingredientes = $columna['ingredientes'];
#    $fotoPizza = $columna['fotoPizza'];
#}
