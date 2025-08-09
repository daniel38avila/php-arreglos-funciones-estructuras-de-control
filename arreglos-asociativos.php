<?php

$edades = array(
    "Carlos" => 20,
    "Ana" => 22,
    "Luis" => 19,
    "Marta" => 21
);

echo "La edad de Luis es: " . $edades["Luis"] . "\n";


$cafes = array(
    "Americano" => 2.50,
    "Latte" => 3.00,
    "Cappuccino" => 3.50,
    "Espresso" => 2.00
);

echo "El precio de un Latte es: $ {$cafes["Latte"]} \n";


$personas = array(
    "Juan" => array(
        "edad" => 30,
        "apellido" => "Madrid"
    ),
    "Laura" => array(
        "edad" => 25,
        "apelido" => "Avila"
    ),
    "Pedro" => array(
        "edad" => 28,
        "apellido" => "Romero"
    )
);

echo "La información de Laura es: Edad: " . $personas["Laura"]["edad"] . ", Apellido: " . $personas["Laura"]["apelido"] . "\n";