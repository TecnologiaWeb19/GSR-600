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
    <h1>Solucion al ejercicio 4</h1>
    <div class="content">
        <?php
            $horasTrabajadas = $_GET["horasTrabajadas"];

            if($horasTrabajadas < 40){
                $sueldoSemanal = $horasTrabajadas * 12;
            }else{
                $sueldoSemanal = (40*12) + ($horasTrabajadas-40) * 16;
            }

            echo "El sueldo semanal que le corresponde es de $sueldoSemanal Bs."
        ?>
    </div>
    <p>
        <a href="ejercicio_04.php">Volver al Ejercicio</a>
    </p>
</body>
</html>