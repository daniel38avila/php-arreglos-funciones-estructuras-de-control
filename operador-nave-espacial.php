<?php

// Declaramos un arreglo con los precios de café
$precios_de_cafe = [45, 89, 12, 56, 34, 23, 67, 90];

/* 
  Usamos la función usort() para ordenar el arreglo.
  usort recibe:
  1. El array a ordenar.
  2. Una función de comparación anónima (callback).
*/
usort($precios_de_cafe, function($a, $b) {
  /*
    Aquí aplicamos el operador de nave espacial (<=>).
    - Si $a es menor que $b → devuelve -1.
    - Si $a es igual a $b → devuelve 0.
    - Si $a es mayor que $b → devuelve 1.
    
    Eso le indica a usort() cómo ordenar los elementos.
    En este caso, quedará en orden ASCENDENTE.
  */
  return $a <=> $b;
});

// Imprimimos el array ya ordenado para verificar el resultado
var_dump($precios_de_cafe);