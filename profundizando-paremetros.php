<?php

// Definimos una función llamada suma
// Tiene 2 parámetros ($a y $b) con valores por defecto de 1
function suma ($a = 1, $b = 1) {

  echo "La suma de $a + $b es: " . ($a + $b) . "\n";
}

// Creamos tres arreglos de números
$numeros = [1, 2];
$numeros2 = [50, 20];
$numeros3 = [10000, 2];

// Usamos el operador de *desempaquetado* (...)
// para enviar cada valor del arreglo como argumento
suma(...$numeros);   // Pasa 1 y 2 → resultado 3
suma(...$numeros2);  // Pasa 50 y 20 → resultado 70
suma(...$numeros3);  // Pasa 10000 y 2 → resultado 10002


// Definimos una función llamada suma_infinita
// El parámetro ...$params permite recibir N argumentos
function suma_infinita(...$params) {

  // Inicializamos la variable acumuladora en 0
  $suma = 0;

  // Recorremos cada número recibido en $params
  foreach ($params as $numero) {
    $suma += $numero; // Vamos sumando uno a uno
  }

  // Mostramos el resultado total
  echo "La suma de los números de la suma infinita es: $suma\n";
}

// Probamos la función con diferentes cantidades de parámetros
suma_infinita(1, 2); // Resultado: 3
suma_infinita(1, 2, 3); // Resultado: 6
suma_infinita(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // Resultado: 55

// Imprime un salto de línea al final
echo PHP_EOL;
