<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 1</title>
</head>
<body>
    <h1>Practica 1</h1>
    <h2>1 Escribe un programa que muestre tu nombre por pantalla.</h2>
    <p>
        <?php
             $nombre = "Erik";
            echo $nombre;
        ?>
    </p>
    <h2>2 Escribe un programa que muestre tu nombre por pantalla.</h2>
    <p>
        <?php
            echo "Erik";
        ?>
        <br>
        <?php
            echo "Carretera Tajani";
        ?>
        <br>
        <?php
            echo "23232323";
        ?>
        <br>
    </p>

    <h2>4 Tabla.</h2>
    <p>
        <?php
             $nombre = "Erik";
            echo $nombre;
            $colorAmarillo = "GSR-600";
            $colorRojo = "Rojos";
        ?>
    </p>

<table>
    <tr>
        <td>Colores</td>
        <td>Frutas</td>
    </tr>    
    <tr>
        <td><?php echo $colorAmarillo ?></td>
        <td>Platano</td>
    </tr>
    <tr>
        <td><?php echo $colorAmarillo ?></td>
        <td>Mandarina</td>
    </tr>
    <tr>
        <td><?php echo $colorAmarillo ?></td>
        <td>Naranja</td>
    </tr>
    <tr>
        <td><?php echo $colorRojo ?></td>
        <td>Manzana</td>
    </tr>
    <tr>
        <td><?php echo $colorRojo ?></td>
        <td>Tomate</td>
    </tr>
</table>

</body>
</html>