<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo Hola Mundo</title>
</head>
<body>
    <h1>Ejemplo de PHP</h1>

    <p>
        <?php
            echo "¡Hola Mundo!";
        ?>
    </p>

    <p>Variables</p>
    <?php
        $numero = 20;
        $palabra = "Hola";
        print_r(get_defined_vars());
    ?>
</body>
</html>