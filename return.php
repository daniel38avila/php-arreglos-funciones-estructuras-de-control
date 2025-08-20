<?php

// Definimos una función llamada frases_de_freddy
function frases_de_freddy () {

  // Generamos un número aleatorio entre 1 y 4
  $numero_aleatorio = rand(1, 4);

  // Inicializamos la variable donde guardaremos la frase
  $frase_de_freddy = "";

  // Dependiendo del número aleatorio, asignamos una frase distinta
  switch ($numero_aleatorio) {
    case 1:
      $frase_de_freddy = "Nunca pares de aprender.\n";
      break;
    case 2:
      $frase_de_freddy = "Las empresas no son familia.\n";
      break;
    case 3:
      $frase_de_freddy = "La tecnología es el futuro.\n";
      break;
    case 4:
      $frase_de_freddy = "Amo PHP.\n";
      break;
  }

  // En lugar de imprimir directamente con echo,
  // devolvemos la frase para que pueda ser usada fuera de la función
  return $frase_de_freddy;
}

// Aquí llamamos a la función
// Como la función devuelve un valor (string), usamos echo para mostrarlo en pantalla

$mi_frase = frases_de_freddy();
echo "Freddy dice: $mi_frase";
