<?php
// 1) Array asociativo: "nombre" => edad
$edades = array(
    "Carlos" => 20,
    "Ana" => 22,
    "Luis" => 19,
    "Marta" => 21
);

// Acceso por clave (string). Los arrays asociativos se leen con $arr['clave']
// Imprime: La edad de Luis es: 19
echo "La edad de Luis es: " . $edades["Luis"] . "\n";


// 2) Otro array asociativo: "tipo de café" => precio
$cafes = array(
    "Americano" => 2.50,
    "Latte" => 3.00,
    "Cappuccino" => 3.50,
    "Espresso" => 2.00
);
// Acceso por clave (string)
// Imprime: El precio de un Latte es: $3
echo "El precio de un Latte es: \$" . $cafes["Latte"] . "\n";

// Si quieres siempre 2 decimales (útil para precios):
echo "El precio de un Latte es: \$" . number_format($cafes["Latte"], 2) . "\n";


// 3) Array asociativo ANIDADO: "persona" => [propiedades]
$personas = array(
    "Juan" => array(
        "edad" => 30,
        "apellido" => "Madrid"
    ),
    "Laura" => array(
        "edad" => 25,
        "apellido" => "Avila"
    ),
    "Pedro" => array(
        "edad" => 28,
        "apellido" => "Romero"
    )
);

// Acceso a valores anidados: $personas["Laura"]["edad"] y ["apellido"]
echo "La información de Laura es: Edad: "
   . $personas["Laura"]["edad"]
   . ", Apellido: "
   . $personas["Laura"]["apellido"]
   . "\n";
