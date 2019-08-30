<?php
    $titulo = "Ejercicio 1";
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
    <h2>Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.</h2>

<div id="content">
    <p>Por favor, introduzca un dia de la semana (en minuscula) y le dire que materia toca a la primera hora.</p>

    <form action="ejercicio_01_res.php" method="get">
        <input type="text" name="dia" autofocus>
        <input type="submit" value="Aceptar">
    </form>

</div>

</body>
</html>