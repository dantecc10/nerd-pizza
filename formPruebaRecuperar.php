<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar la contraseña</title>
</head>

<body>
    <form action="php scripts/crearClaveRecuperación.php" method="post">
        <label for="correoRecuperación">Ingrese su correo electrónico:</label><br>
        <input type="email" name="correoRecuperación" id="InputMail">
    </form>
</body>

</html>