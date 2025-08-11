<?php

$asientos_disponibles = 0;
$hay_asientos_en_la_ultima_fila = false;

if ($asientos_disponibles > 0) {
    $palabra = ($asientos_disponibles === 1) ? "asiento" : "asientos"; // Ternario: si hay 1 usa "asiento"; si no, "asientos" (ajusta singular/plural según $asientos_disponibles)
    echo "Hay $asientos_disponibles $palabra disponibles. Puedes ir a ver la película.";
} elseif ($hay_asientos_en_la_ultima_fila) {
    echo "No hay asientos generales, pero sí en la última fila.";
} else {
    echo "No hay asientos disponibles.";
}

echo PHP_EOL;