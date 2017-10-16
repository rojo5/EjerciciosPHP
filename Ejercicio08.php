<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Crea un array llamado $palabras. Cada posición vendrá determinada por los caracteres que
        //están entre los espacios de la variable $cookies. Por ejemplo, el primer elemento sería HTML,
        //el siguiente (Hypertext, después Markup, luego Language),... Muestra por pantalla todos los
        //elementos (un elemento por línea)
        $cookies = "HTML (HyperText Markup Language) es el primer lenguaje que una persona debe conocer si desea comenzar a realizar páginas web. HTML no es un lenguaje de programación, sino una lenguaje descriptivo, una serie de etiquetas que el navegador interpretará de una u otra forma para mostrar distintos contenidos por pantalla.";
        $yoda = strlen($cookies);
        $aPalabras = array($yoda);
        $contador = 0;
        $aux = "";


        for ($i = 0; $i <= $yoda; $i++) {
            //$caracter = substr($cookies, $i, 1);
            $caracter = substr($cookies, $i, 1);
            if($caracter != " " || $i == $yoda){
                $aux = $aux . $caracter;
              //  echo "$caracter <br>";
            }
            else{
                $aPalabras[$contador] = $aux;
                echo "$aux";
                $contador++;   
                $aux ="";
                
            }
        }
        $tamano = sizeof($aPalabras);
        for($u = 0; $u<= $tamano; $u++){
//            print_r($aPalabras[$u]);
//                echo "$aPalabras[$u]<br>";
        }
//        
//         print_r($aPalabras[0]);
        

        ?>



    </body>
</html>
