<?php
$conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza"); ?>
<table class="InsertarResultados Examen">
    <?php
    $consulta = "SELECT * FROM `pizzas`";
    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
    echo ('<tr>');
    echo ('<th>ID</th>');
    echo ('<th>Nombre</th>');
    echo ('<th>Calificación</th>');
    echo ('</tr>');
    while ($columna = mysqli_fetch_array($resultado)) {
        echo ("<tr>");
        echo ("<td>" . $columna['ID'] . "</td>");
        echo ("<td>" . $columna['Alumno'] . "</td>");
        echo ("<td>" . $columna['Calificación'] . "</td>");

        echo ("</tr>");
    }
    ?>
</table>