<?php

// Definimos una función llamada get_pokemon
function get_pokemon() {
  
  // Generamos un número aleatorio entre 1 y 5
  $numero_aletorio = rand(1, 5);

  // Evaluamos el número con una estructura switch
  switch ($numero_aletorio) {
    
    case 1:
      // Si el número es 1, mostramos "Pikachu"
      echo "Pikachu\n";
      break;
      
    case 2:
      // Si el número es 2, mostramos "Charmander"
      echo "Charmander\n";
      break;
      
    case 3:
      // Si el número es 3, mostramos "Mewtwo"
      echo "Mewtwo\n";
      break;
      
    default:
      // Si el número NO es 1, 2 o 3 (es decir, 4 o 5),
      // mostramos este mensaje por defecto
      echo "No se encontró el Pokémon\n";
  }
}

// Llamamos a la función 4 veces
// Cada vez devolverá un resultado distinto
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();

// Solo imprime un salto de línea al final
echo "\n";
