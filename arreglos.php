<?php
// Forma corta (recomendada): crea un array indexado con 3 elementos.
// Índices: 0 => 20, 1 => 18, 2 => 40
$edades = [20, 18, 40];

// Forma larga (equivalente a la corta). Aquí estás "pisando"/reemplazando
// el valor anterior de $edades por ESTE nuevo array (mismo contenido).
$edades = array(20, 18, 40);

// Acceso por índice: recuerda que los arrays indexados empiezan en 0.
// $edades[1] corresponde al segundo elemento -> 18
echo "una de las edades que está dentro es " . $edades[1];

// Imprime un salto de línea. En CLI verás el salto; en navegador HTML
// puede no “romper” la línea (usa <br> si lo ves en el navegador).
echo "\n";
