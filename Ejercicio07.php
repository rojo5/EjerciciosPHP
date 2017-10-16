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
        $cookies = "HTML (HyperText Markup Language) es el primer lenguaje que una persona debe conocer si
                    desea comenzar a realizar páginas web. HTML no es un lenguaje de programación, sino una
                    lenguaje descriptivo, una serie de etiquetas que el navegador interpretará de una u otra forma
                    para mostrar distintos contenidos por pantalla.";

        echo "$cookies<br><br><br><br>";

        echo revertir($cookies);

        function revertir($parametro1) {



             return strrev($parametro1);
            
             
        }
        ?>




    </body>
</html>
