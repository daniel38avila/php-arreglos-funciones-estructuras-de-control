<?php

// Solicita al usuario que ingrese la cantidad de donaciones
$cantidad_donaciones = readline("Ingrese la cantidad de donaciones: ");

// Condición: si la cantidad es igual o mayor a 100...
if ($cantidad_donaciones >= 100) {
    echo "Tu retiro en proceso, por favor espera"; // Mensaje si cumple la condición
} else { // Si no cumple la condición
    echo "No tienes suficientes donaciones para retirar, se retira después de 100 dólares";
}

// Salto de línea en consola
echo PHP_EOL;