<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo 5 Variables de tipo ARRAY</title>
</head>
<body>
    <?php
        //Inicializacionde un ARRAY
       $variableArray = array();

       //Asignar valor al ARRAY
       $variableArray[0]="Esta es la posicion 0";
       $variableArray[1]="Esta es la posicion 1";
       $variableArray[2]="Esta es la posicion 2";
       $variableArray[3]="Esta es la posicion 3";
       $variableArray[4]="Esta es la posicion 4";
       $variableArray[5]="Esta es la posicion 5";
       $variableArray[6]="Esta es la posicion 6";

       //Recorremos el ARRAY
       echo "<pre>";
       print_r($variableArray);
       echo "</pre>";
    ?>
</body>
</html>