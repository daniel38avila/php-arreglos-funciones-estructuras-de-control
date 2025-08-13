<?php 

// Lista de frutas y sus precios (versión en comentarios)
// Pera = 10
// Manzana = 20
// Naranja = 30
// Sandia = 40
// Platano = 50

// Variable que guarda el nombre de la fruta a consultar
$canasta = "pera";


// PRIMERA FORMA: Switch básico

switch ($canasta) {
    case "pera": // Si $canasta es "pera"
        echo "La pera cuesta $10"; // Muestra el precio fijo
        break; // Sale del switch

    case "manzana":
        echo "La manzana cuesta $20";
        break;

    case "naranja":
        echo "La naranja cuesta $30";
        break;

    case "sandia":
        echo "La sandía cuesta $40";
        break;

    case "platano":
        echo "El plátano cuesta $50";
        break;

    default: // Si $canasta no coincide con ninguno de los anteriores
        echo "De eso no hay aquí";
}
echo PHP_EOL; // Salto de línea en consola



// SEGUNDA FORMA: Switch optimizado

// Creamos un array asociativo con frutas como claves y precios como valores
$precios = [
    "pera" => 10,
    "manzana" => 20,
    "naranja" => 30,
    "sandia" => 40,
    "platano" => 50
];

// Evaluamos $canasta pero agrupando casos
switch ($canasta) {
    // Si $canasta es cualquiera de estas frutas
    case "pera":
    case "manzana":
    case "naranja":
    case "sandia":
    case "platano":
        // Accedemos al precio desde el array y lo mostramos
        echo "La $canasta cuesta $" . $precios[$canasta];
        break;

    default:
        echo "De eso no hay aquí";
}
echo PHP_EOL; // Salto de línea