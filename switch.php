<?php 

//lista de frutas y precios

//Pera = 10
//Manzana = 20
//Naranja = 30
//Sandia = 40
//Platano = 50

$canasta = "pera";

// Forma de hacer un switch para mostrar el precio de las frutas


switch ($canasta) {
    case "pera":
        echo "La pera cuesta $10";
        break;
    case "manzana":
        echo "La manzana cuesta  $20";
        break;
    case "naranja":
        echo "La naranja cuesta $30";
        break;
    case "sandia":
        echo "La sandia cuesta  $40";
        break;
    case "platano":
        echo "El platano cuesta  $50";
        break;
    default:
        echo "De eso no hay aqui";
}
echo PHP_EOL;
//Fin del switch


//forma de optimizar el switch
//Usando un array asociativo para los precios

// Array asociativo con los precios de las frutas
$precios = [
    "pera" => 10,
    "manzana" => 20,
    "naranja" => 30,
    "sandia" => 40,
    "platano" => 50
];

switch ($canasta) {
    case "pera":
    case "manzana":
    case "naranja":
    case "sandia":
    case "platano":
        echo "La $canasta cuesta $" . $precios[$canasta];
        break;
    default:
        echo "De eso no hay aquí";
}
echo PHP_EOL;

