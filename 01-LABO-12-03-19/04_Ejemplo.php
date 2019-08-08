<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo 4 Variables en un Funcion</title>
</head>
<body>
    <?php
       
        $a = 1;
        $b = 2.5;
        $c = "Hola";

        function EjemploVariables(){
            global $a, $b, $c;
            echo $a." - ".$b." - ".$c;
        }

        EjemploVariables();

    ?>
</body>
</html>