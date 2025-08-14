<?php

// Lista de nombres de usuario que ya están ocupados
$usernames = ["admin", "user", "guest"];

// El ciclo do...while se ejecuta al menos una vez,
// y luego revisa la condición al final de cada vuelta.
do {
    // Solicita al usuario que ingrese un nuevo nombre
    // readline() captura lo que escriba en la consola
    $username = readline("Por favor ingresa tu nuevo nombre de usuario: ");
    
    // Imprime un salto de línea para separar la salida
    echo "\n";

// Verifica si el nombre ingresado ($username) ya está en la lista $usernames
// in_array() devuelve true si lo encuentra, false si no
// Si es true (ya existe), el ciclo se repite pidiendo otro nombre
} while (in_array($username, $usernames));

// Una vez que el nombre ingresado no está en la lista, el ciclo termina.
// Imprime un salto de línea final antes de terminar el programa.
echo PHP_EOL;
