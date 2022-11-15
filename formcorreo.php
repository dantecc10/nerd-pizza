<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="php scripts\EnvioRecibo.php">
        <fieldset>
        <legend> Ingrese su consulta</legend>
        <p>
            <label> Escriba su correo:
            <input type="text" name="email">
            </label>
        </p>
        <p>
            <label> Escriba su Nombre:
            <input type="text" name="nombre">
            </label>
        </p>
        <p>
            <label>Escriba un mensaje:
            <input type="text" name="mensaje">
            </label>
        </p>
        <input type="submit" value="enviar">
        </fieldset>
    </form>
</body>
</html>