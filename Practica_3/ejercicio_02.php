<?php
    $titulo = "Ejercicio 2";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1><?php echo $titulo?></h1>
    <h2>Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.</h2>

<div id="content">
    <p>Por favor, Introduzca una hora del dia (0-23).</p>

    <form action="ejercicio_02_res.php" method="get">
        <input type="number" name="hora" autofocus>
        <input type="submit" value="Aceptar">
    </form>

</div>

</body>
</html>