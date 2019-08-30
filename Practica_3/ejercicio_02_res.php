<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Solucion al ejercicio 2</h1>
    <div class="content">
        <?php
            $hora = $_GET["hora"];
            if (($hora >= 6) && ($hora <= 12)) {
                echo "Buenos dias";
            }

            if (($hora >= 13) && ($hora <= 20)) {
                echo "Buenas Tardes";
            }

            if (($hora >= 21) && ($hora < 24) || ($hora <= 5) && ($hora >= 0)) {
                echo "Buenas noches";
            }

            if (($hora >= 24) || ($hora < 0)) {
                echo "La hora introducida no es correcta.";
            }
        ?>
    </div>
    <p>
        <a href="ejercicio_02.php">Volver al Ejercicio</a>
    </p>
</body>
</html>