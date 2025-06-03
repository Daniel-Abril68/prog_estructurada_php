<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes en PHP</title>
</head>
<body>
    <h1>variables y consstantes en PHP</h1>
    <?php
        // Las variables se representan el sinvolo $ a la palabra que se usa como variable.
        // PHP es sensitive case 
        // Las variables no pueden emezar con un numero
        // No es necesario especificar el tipo de variable pero si se debe saber cuando utilizar las comillas para el caso de variables de tipo cadena o string.
        
        // Asignamos a la variable "a" el valor s
        $a = 5;

        // Asignamos a la variable "b" el valor 7
        $b = "7";

        echo "<h2>variables</h2>";

        // mostrar el valor de la variable "a"
        echo ($a):

        echo "<br>";

        // mostrar el valor de la variable  "b"
        echo($b);

        echo "<br>";

        echo "<h2>variables</h2>";

        /*El valor de una constante no cambia o se mantiene fijo durante la ejecucion de la pagina*/

        /*La forma de definir las constantes en php es mediante el uso de la instruccion define */
        
        // Creamos una constante llamaada capital_colombia cuyo valor es bogota
        define("capital_colombia","bogota");

    ?>
</body>
</html>
