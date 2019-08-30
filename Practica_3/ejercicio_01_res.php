<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Solucion al ejercicio 1</h1>
    <div class="content">
        <?php
            $dia = $_GET["dia"];

            $toca = "La materia que te toca es: ";
            switch ($dia) {
                case "lunes":
                    echo $toca."Inteligencia Artificial";
                    break;
                case "martes":
                    echo $toca."Aplicaciones Informatica Industriales";
                    break;
                case "miercoles":
                    echo $toca."Gestion de seguridad en Redes";
                    break;
                case "jueves":
                    echo $toca."Gestion de seguridad en Redes";
                    break;
                case "viernes":
                    echo $toca."emprendimiento productivo II";
                    break;
                case "sabado":
                    echo "¡Ese dia no hay clases!";
                    break;
                default:
                    echo "El dia introducido no es correcto";
                    break;
            }
        ?>
    </div>
    <p>
        <a href="ejercicio_01.php">Volver al Ejercicio</a>
    </p>
</body>
</html>