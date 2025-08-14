<?php 

// Ejemplo básico de uso de while en PHP

// Queremos imprimir "Hello, World!" 10 veces usando un ciclo while

$contador = 1; // Paso 1: inicializas el contador

while ($contador <= 10) { // Paso 2: revisas la condición
  echo "Hello, World! $contador \n"; // Paso 3: imprimes
  $contador++; // Paso 4: incrementas para acercarte al fin del ciclo
}

echo PHP_EOL; // Esto solo agrega un salto de línea final