<?php

// Este bloque de comentarios muestra los resultados esperados
// para algunos valores de entrada (número de la tienda):
// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21
// 9 -> 34
//
// En otras palabras, el programa genera números de la sucesión de Fibonacci
// (cada número es la suma de los dos anteriores).

// Se pide al usuario ingresar un número (ej: "Ingrese el número de la tienda: ").
// Ese número indica hasta qué posición de la serie de Fibonacci se quiere calcular.
$numero_de_tienda = (int)readline("Ingrese el número de la tienda: ");

// Variables iniciales para la serie de Fibonacci:
// $anterior representa el número anterior en la secuencia
// $actual representa el número actual en la secuencia
$anterior = 0;
$actual = 1;

// Un bucle que empieza en 2 (porque ya tenemos las posiciones 0 y 1)
// y se repite hasta llegar al número ingresado ($numero_de_tienda).
for ($i = 2; $i <= $numero_de_tienda; $i++) {
    
  // Guardamos el valor actual en una variable temporal
  // para no perderlo al actualizar $actual
  $temporal = $actual;

  // El nuevo valor de $actual es la suma del actual y el anterior
  // (propiedad de Fibonacci)
  $actual += $anterior;

  // El valor anterior se actualiza con el que guardamos en $temporal
  $anterior = $temporal;

  // Imprime el valor actual de la secuencia en cada iteración
  echo "Hay $actual \n";
}