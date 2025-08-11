<?php

$edades = [18, 22, 19, 21];

//count
echo count($edades) . "\n";

//array_push
array_push($edades, 23);
var_dump($edades);

// is_array
$esto_no_es_un_arreglo = "";
var_dump(is_array($esto_no_es_un_arreglo));// false
var_dump(is_array($edades));// true

// Explode
$lista_de_frutas = "fresa, manzana, plátano, kiwi";
$lista_de_frutas_array = explode(", ", $lista_de_frutas);
var_dump($lista_de_frutas_array);

//inplode
$frutas_string_array2 = ["fresa", "manzana", "plátano", "kiwi"];
$lista_de_frutas = implode(", ", $frutas_string_array2);
var_dump($lista_de_frutas);


echo "\n";

//¿Mini-reto? Convierte "A,B, C ,D" en ["A","B","C","D"] (sin espacios) y luego únelos como "A | B | C | D".

$cadena = "A,B,C,D";
$array = explode(",", $cadena);
$array = array_map('trim', $array); // Elimina espacios en blanco
$cadena_unida = implode(" | ", $array);
echo $cadena_unida . "\n"; // Imprime: A | B | C | D