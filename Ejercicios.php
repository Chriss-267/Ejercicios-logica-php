<?php

// Problema de la serie Fibonacci:
// Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. 
// La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.

function generarFibonacci($n) {

    if ($n <= 0) {
        return [];
    }
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return array_slice($fibonacci, 0, $n);
}

// Ejemplo de uso
$n = 10;
$serie = generarFibonacci($n);
echo "Los primeros $n términos de la serie Fibonacci son: " . implode(", ", $serie) ;
echo "<br>";



// Problema de números Primos:
// Crea una función llamada esPrimo que determine si un número dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo.

function esPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; 
        }
    }

    return true;
}

$numero = 29;
if (esPrimo($numero)) {
    echo "$numero es un número primo. <br>";
} else {
    echo "$numero no es un número primo. <br>";
}


// Problema de Palíndromos:
// Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.


function esPalindromo($texto) {

    $textoLimpio = strtolower(str_replace(' ', '', $texto));
    return $textoLimpio === strrev($textoLimpio);
}

$cadena = "la ruta natural";

if (esPalindromo($cadena)) {
    echo " $cadena es un palíndromo.";
    
} else {
    echo "$cadena no es un palíndromo.";
}

?>