//Escuela de Gatos

<?php

$escuela = [
  [
    'nombre'    => 'Gato Sabio',
    'ocupacion' => 'Profesor de filosofía',
    'color'     => 'gris',
    'comidas'   => [
      'favoritas'    => ['sardinas', 'tomates', 'carne molida'],
      'no_favoritas' => ['verduras', 'pollo', 'atún'],
    ],
  ],
  [
    'nombre'    => 'Gato Matemático',
    'ocupacion' => 'Profesor de matemáticas',
    'color'     => 'blanco',
    'comidas'   => [
      // Decisión: mantenemos "pollo" como favorito y LO QUITAMOS de no_favoritas
      'favoritas'    => ['croquetas', 'pollo'],
      'no_favoritas' => ['verduras', 'pescado'],
    ],
  ],
  [
    'nombre'    => 'Gato Programador',
    'ocupacion' => 'Desarrollador de software',
    'color'     => 'naranja',
    'comidas'   => [
      'favoritas'    => ['atún', 'sardinas', 'croquetas'],
      'no_favoritas' => ['pollo'],
    ],
  ],
];


// Accesos directos
$gato_sabio       = $escuela[0];
$gato_matematico  = $escuela[1];
$gato_programador = $escuela[2];

// 1) Favoritas de Gato Sabio (ahora es una lista real → usamos implode para mostrar bonito)
echo "Las comidas favoritas de Gato Sabio son: " . implode(', ', $gato_sabio['comidas']['favoritas']) . "\n";

// 2) Color de Gato Matemático
echo "El color de Gato Matemático es: " . $gato_matematico['color'] . "\n";

// 3) Ocupación de Gato Programador
echo "Gato Programador trabaja como: " . $gato_programador['ocupacion'] . "\n";
