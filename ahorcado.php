<?php

function clear () {

  if (PHP_OS === "WINNT") {
    system("cls");
  }
  else {
    system("clear");
  }
  
}

$possible_word = ["programacion", "javascript", "php", "html", "css", "react", "angular", "vue", "java", "python", "ruby", "swift"];

define("MAX_ATTEMPTS", 6);

echo "Juego del ahorcado \n\n" ;

//Iniciamos el juego
$choosen_word = $possible_word[ rand(0, count($possible_word) - 1) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {

  echo "Palabra de $word_length letras: \n\n";
  echo $discovered_letters . "\n\n";

  //pedimos al usuario que escribe.
  $player_letter = readline("Escribe una letra: ");
  $player_letter = strtolower($player_letter);

  if ( str_contains($choosen_word, $player_letter) ) {
    //verificamos todas la ocurrencuas de esta letra para remplezarla
    $offset = 0;
    while ( 
      ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false
      
    ) {
      $discovered_letters[$letter_position] = $player_letter;
      $offset = $letter_position + 1;
    }

  }
  else {
    clear();
    $attempts++;
    echo "Letra incorrecta. Te quedan " . (MAX_ATTEMPTS - $attempts) . " intentos.\n";
    sleep(2);
  }

  clear();

} while ( $attempts < MAX_ATTEMPTS && $discovered_letters !== $choosen_word);

clear ();

if ($attempts < MAX_ATTEMPTS) {
  echo "¡Felicidades! Has adivinado la palabra: $choosen_word\n\n";
} else {
  echo "Lo siento, has perdido. La palabra era: $choosen_word\n\n";
}

echo PHP_EOL;