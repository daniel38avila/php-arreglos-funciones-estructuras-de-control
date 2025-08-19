<?php

// Definimos una función llamada es_estudiante_legend
// Recibe un parámetro $platzi_rank
function es_estudiante_legend($platzi_rank) {
  
  // Comprobamos si el valor recibido es mayor o igual a 20000
  if ($platzi_rank >= 20000) {
    // Si la condición se cumple, mostramos este mensaje
    echo "Eres un estudiante Legend\n";
  }
  else {
    // Si NO se cumple, mostramos este otro mensaje
    echo "No eres un estudiante Legend\n";
  }
}

// Creamos un bucle do...while que se ejecutará de forma infinita
do {
  // Pedimos al usuario que escriba su Platzi Rank
  // readline() espera la entrada del usuario desde consola
  // (int) convierte ese valor en número entero
  $platzi_rank_user = (int) readline("Ingresa tu Platzi Rank: ");

  // Llamamos a la función con el valor que ingresó el usuario
  es_estudiante_legend($platzi_rank_user);

// El bucle seguirá ejecutándose siempre porque la condición es `true`
} while (true);

// Imprimimos un salto de línea extra al final del programa
echo PHP_EOL;
