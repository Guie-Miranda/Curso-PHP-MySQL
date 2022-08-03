<html> <!-- Aquí se inicia el html -->
        <head>
                <title>Factorial</title>
        </head>

        <body>
            <form method="POST">
                <label>Ingresa un número entero: </label>
                <input type="text" name="entrada">
                <br> <!-- Este es el salto de linea -->
                <button type="submit">Calcular</button> <!-- Esto agrega un boton para presionar -->
                <br>
                <label>El resultado es: </label>
            </form>
        </body>
</html>
<?php //es la etiqueta de apertura
    $m = $_POST['entrada'];
    function factorial($n){
        if($n == 0 || $n == 1)
            return 1; 
        else   
            return $n*factorial($n-1);
    }
    echo factorial($m);
//el de abajo es la etiqueta de cierre, es importante ponerla si hay otras funciones que no sean PHP
?>
