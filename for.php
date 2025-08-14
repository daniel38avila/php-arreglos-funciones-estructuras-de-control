<?php

// Primer ciclo for
// Estructura: (inicialización; condición; actualización)
for ($i = 0; $i < 10; $i++) {
    // $i = 0      → Se inicializa el contador en 0 (solo al inicio)
    // $i < 10     → Mientras $i sea menor que 10, el bloque se ejecuta
    // $i++        → Después de cada vuelta, $i aumenta en 1
    
    // Muestra el valor actual de $i
    echo "El contador es: $i\n";
}

// Segundo ciclo for con dos variables
for ($a = 0, $b = 0; $a < 10; $a++, $b += 2) {
    // $a = 0, $b = 0 → Inicializa dos variables en la misma línea
    // $a < 10        → La condición solo revisa $a, no $b
    // $a++           → Aumenta $a en 1 en cada vuelta
    // $b += 2        → Aumenta $b en 2 en cada vuelta
    
    // Muestra el valor de $a y $b en cada iteración
    echo "I = $a J = $b \n";
}

// Imprime un salto de línea final
echo PHP_EOL;



// Usando un ciclo for para iterar sobre un arreglo

// Array con los productos del almacén
// Cada producto es un array asociativo con nombre, categoría y precio
$productos = [
    ["nombre" => "Camisa",    "categoria" => "Ropa",     "precio" => 25000],
    ["nombre" => "Pantalón",  "categoria" => "Ropa",     "precio" => 40000],
    ["nombre" => "Zapatos",   "categoria" => "Calzado",  "precio" => 80000]
];

// Ciclo for para recorrer todos los productos
for ($i = 0; $i < count($productos); $i++) {
    // Accedemos a cada elemento por su índice
    $producto = $productos[$i];

    // Mostramos la información formateada
    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Categoría: " . $producto["categoria"] . "\n";
    echo "Precio: $" . number_format($producto["precio"], 0, ',', '.') . "\n";
    echo "----------------------\n";
}

echo PHP_EOL;