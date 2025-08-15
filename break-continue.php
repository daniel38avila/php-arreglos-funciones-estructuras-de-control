<?php

$tienda_de_cafes = array(
  "americano" => 20,
  "espresso" => 30,
  "café con leche" => 25,
  "capuccino" => 25,
  "latte" => 35,
  "mocha" => 40.5
);

foreach ($tienda_de_cafes as $cafe => $precio) {
  // Imprime nombre y precio; se escapa $ para mostrar el símbolo de moneda.
  echo "El precio del café $cafe es: \$" . $precio . " USD\n";

  // Si encontramos "latte", mostramos un mensaje especial y cortamos el ciclo.
  if ($cafe === "americano") {
    echo "El café $cafe es muy recomendado, su precio es: \$" . $precio . " USD\n";
    break; // Detiene el foreach aquí; "mocha" ya no se procesa.
  }
}

echo PHP_EOL;


// Ejemplo con continue.
foreach ($tienda_de_cafes as $cafe => $precio) {

  // Coincidencia exacta con tilde para que funcione el continue.
  if ($cafe === "café con leche") {
    echo "El café $cafe me cae mal por la leche.\n";
    continue; // Salta el resto del bloque y pasa al siguiente café.
  }

  // Este echo no se ejecuta cuando entra al continue.
  echo "El café $cafe es muy rico\n";
}