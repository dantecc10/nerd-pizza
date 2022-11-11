<?php
$conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza"); ?>
<table class="InsertarResultados Examen">
    <?php
    $consulta = "SELECT * FROM `pizzas`";
    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
    echo ('<tr>');
    echo ('<th>ID</th>');
    echo ('<th>Pizza</th>');
    echo ('<th>Ingredientes</th>');
    echo ('<th>Ruta de foto</th>');
    echo ('</tr>');
    while ($columna = mysqli_fetch_array($resultado)) {
        echo ("<tr>");
        echo ("<td>" . $columna['idPizza'] . "</td>");
        echo ("<td>" . $columna['nombrePizza'] . "</td>");
        echo ("<td>" . $columna['ingredientes'] . "</td>");
        echo ("<td>" . $columna['fotoPizza'] . "</td>");


        echo ("</tr>");
    }
    ?>
</table>