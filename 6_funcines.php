<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en php</title>
</head>
<body>
    <h1>Funciones</h1>
    <p>una funcion es un bloque de codigo que intriduciomos en nuestra pagina y que puede ser utiizado a lo largo de todo nuestro codigo de php. la principal ventaja de las funciones es que nos permiten ahorrar codigo.</p>
    <p>Para definir funciones se emplea la sentencia function. Ejemplo: function suma($)</p>
    <p> las funciones pueden tener arguentos como sean necesarios. separandolos con comas</p>

    <?php
        function sumar($x,$y)
        {
            $z = $x + $y
            return $z;
        }

        //invoco o llamo la funcion sumar
        $resultado = sumar(5,12);
        echo "Resultado: ". $resultado
    ?>
</body>
</html>
