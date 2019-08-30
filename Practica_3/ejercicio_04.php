<?php
    $titulo = "Ejercicio 4";
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
    <h2>Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora.</h2>

<div id="content">
    <p>Por favor, Introduzca el numero de horas trabajadas durante la semana.</p>

    <form action="ejercicio_04_res.php" method="get">
        <input type="number" name="horasTrabajadas" autofocus>
        <input type="submit" value="Aceptar">
    </form>

</div>

</body>
</html>