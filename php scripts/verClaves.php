<?php
$conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza"); ?>
<table class="InsertarResultados Examen">
    <?php
    $consulta = "SELECT * FROM `claves`";
    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
    echo ('<tr>');
    echo ('<th>`id_clave`</th>');
    echo ('<th>`correo_clave`</th>');
    echo ('<th>`clave_recuperación`</th>');
    echo ('<th>`emisión_clave`</th>');
    echo ('<th>`usada_clave`</th>');
    echo ('<th>`prueba_clave`</th>');
    echo ('</tr>');
    while ($columna = mysqli_fetch_array($resultado)) {
        echo ("<tr>");

        echo ("<td>" . $columna['id_clave'] . "</td>");
        echo ("<td>" . $columna['correo_clave'] . "</td>");
        echo ("<td>" . $columna['clave_recuperación'] . "</td>");
        echo ("<td>" . $columna['emisión_clave'] . "</td>");
        echo ("<td>" . $columna['usada_clave'] . "</td>");
        echo ("<td>" . $columna['prueba_clave'] . "</td>");

        echo ("</tr>");
    }
    ?>
</table>