<?php
    /*Esto es para poner el nombre en la pestaña. 
    Para poner html se recomienda poner comilla simple,
    y adentro las comillas dobles para que no se confundan los comandos*/
    echo '<html> 
            <head>
                <title>Chicharronera</title>
            </head>
            <body>
                <form method="POST"> <!-- Estas son las casillas para meter los datos y guardarlos -->
                    <input type="text" name="a"><label> x^2 + </label>
                    <input type="text" name="b"><label> x + </label>
                    <input type="text" name="c"><label> = 0 </label>
                    <br> <!-- Este es el salto de linea -->
                    <button type="submit">Calcular</button> <!-- Esto agrega un boton para presionar -->
                    <br>
            </body>
        </html>'; //echo nos va a ayudar a poner las etiquetas html

    function calcular(){
        $a = $_POST['a'];//Así lo mandamos llamar desde el POST
        $b = $_POST['b'];
        $c = $_POST['c'];

        $raiz = ($b*$b)-(4*$a*$c);

        if($raiz < 0){
            $l = (-1)*$raiz;
            $raiz = sqrt($l);
            echo '<br>x1 = '.round((-$b)/(2*$a),3).' + '.round(($raiz)/(2*$a),3).'i<br>'; //los puntos es para consolidar cada vez que ponemos un texto entre operaciones
            echo 'x2 = '.round((-$b)/(2*$a),3).' - '.round(($raiz)/(2*$a),3).'i<br>'; //para menos decimales se puso round(operación,#decimales)
        }
        else{ 
            $raiz = sqrt($raiz);
            echo '<br>x1 = '.round(((-$b)+($raiz))/(2*$a),3).'<br>';
            echo 'x2 = '.round(((-$b)-($raiz))/(2*$a),3).'<br>';
        }
    }
    echo calcular();
?>