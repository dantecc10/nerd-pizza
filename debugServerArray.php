<?php
setcookie("Sesión", "Iniciada", time() + 24 * 3600, "/", "equipo1.prog5a.com");


if ($_COOKIE['Sesión'] != '') {
    echo "pues no se imprime pero fue validada";
} else {
    echo "No se ha podido validar el contenido de la cookie";
}


echo ($_SERVER['PHP_SELF'] . "<br>");
echo ($_SERVER['SERVER_ADDR'] . "<br>");
echo ($_SERVER['SERVER_NAME'] . "<br>");
echo ($_SERVER['SERVER_SOFTWARE'] . "<br>");
echo ($_SERVER['SERVER_PROTOCOL'] . "<br>");
echo ($_SERVER['REQUEST_METHOD'] . "<br>");
echo ($_SERVER['DOCUMENT_ROOT'] . "<br>");
echo ($_SERVER['REMOTE_ADDR'] . "<br>");
echo ($_SERVER['REMOTE_HOST'] . "<br>");
echo ($_SERVER['REDIRECT_REMOTE_USER'] . "<br>");
echo ($_SERVER['SCRIPT_FILENAME'] . "<br>");
echo ($_SERVER[''] . "<br>");
echo ($_SERVER[''] . "<br>");
echo ($_SERVER[''] . "<br>");
echo ($_SERVER[''] . "<br>");
echo ($_SERVER[''] . "<br>");
