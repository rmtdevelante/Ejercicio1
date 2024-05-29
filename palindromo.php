<?php //Se abre una linea indicando que se va a trabajar con lenguaje PHP
        
function palindromo($palabra) //se crea una función para ejecutar el palindromo
{
    $minusculas = explode(" ", strtolower($palabra)); //Convertimos la cadena a minusculas
    $nuevo="";
    // "as" se utuliza como alias
    foreach($minusculas as $m) //utilizamos un bucle para las cadenas
    {
        trim($m); //Eliminamos los espacios en blanco con la función o método "trim"
        $nuevo .= $m; // se usan los operadores lógicos ".=" para concatenación y se asigna de nuevo a $nuevo
    }
    
    if($nuevo == strrev($nuevo))//Se hace un condicional y la función "Strrev" invierta cadena de texto
    {
        return "Es Palindromo"; //en caso de que la palabra sea un palíndromo retorna
    }
    else { //en caso contrario
        return "No es"; //retorna este mensaje
    }
}

$palabra="ojo"; //aqui se asigna la palabra que se desea evaluar
echo palindromo($palabra); //se imprime la variable donde se quiere mostrar el mensaje

//se finaliza con la etiqueta de cierre ?>