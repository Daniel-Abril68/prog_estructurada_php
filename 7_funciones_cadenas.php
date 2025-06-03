<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Manipulación de Cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>Función substr</h2>
    
    <p>Extrae una parte de una cadena.</p>
    <p>
        <?php
        $texto = "Hola mundo";
        echo substr($texto, 5); // Salida: mundo
        ?>
    </p>

    <h2>Función ord()</h2>
    <p>Devuelve el valor ASCII del primer carácter de una cadena.</p>
    <p>
        <?php
        echo ord("A"); // Salida: 65
        ?>
    </p>

    <h2>Función print()</h2>
    <p>Imprime una cadena en pantalla.</p>
    <p>
        <?php
        print("Hola mundo"); // Salida: Hola mundo
        ?>
    </p>

    <h2>Función sprintf()</h2>
    <p>Devuelve una cadena con formato (no la imprime).</p>
    <p>
        <?php
        $nombre = "Luis";
        $edad = 25;
        $mensaje = sprintf("Mi nombre es %s y tengo %d años", $nombre, $edad);
        echo $mensaje;
        ?>
    </p>

    <h2>Función strtolower()</h2>
    <p>Convierte todos los caracteres de una cadena a minúsculas.</p>
    <p>
        <?php
        echo strtolower("HOLA MUNDO"); // Salida: hola mundo
        ?>
    </p>

    <h2>Función strtoupper()</h2>
    <p>Convierte todos los caracteres de una cadena a mayúsculas.</p>
    <p>
        <?php
        echo strtoupper("hola mundo"); // Salida: HOLA MUNDO
        ?>
    </p>

    <h2>Función ereg() (obsoleta)</h2>
    <p>Buscaba coincidencias con expresiones regulares (ya no se recomienda).</p>
    <p>
        <?php
        // Reemplazo recomendado usando preg_match:
        if (preg_match("/mundo/", "Hola mundo")) {
            echo "Encontrado";
        }
        ?>
    </p>

    <h2>Función eregi() (obsoleta)</h2>
    <p>Como <code>ereg()</code>, pero sin distinguir mayúsculas/minúsculas. También está obsoleta.</p>
    <p>
        <?php
        // Reemplazo recomendado usando preg_match con la bandera i (insensible a mayúsculas/minúsculas):
        if (preg_match("/mundo/i", "Hola mundo")) {
            echo "Coincidencia";
        }
        ?>
    </p>
</body>
</html>
