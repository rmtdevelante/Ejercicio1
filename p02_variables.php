<?php //Se abre una linea indicando que se va a trabajar con lenguaje PHP
    $variable = "Rafael Matamoros Tapia"; //Se declara una variable de tipo 'String' para hacer pruebas inicializada
    $anioNac = 1994; //Se declara otra variable del tipo numérico
    $anioActual = 2024; //Continuamos con otra variable
    $edad = $anioActual - $anioNac; //Se hace una operación con las variables
    //se procede a hacer una impresión con los resultados de dicha operación 
    echo " 
        <h1>Dinamica</h1>
        <p>Nombre: $variable <br/>
        Edad: $edad
        </p>
    ";
//se finaliza con la etiqueta de cierre ?>