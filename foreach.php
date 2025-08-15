<?php

// Creamos un array asociativo donde:
// - La clave es el tipo de café
// - El valor es el precio en USD
$tienda_de_cafes = array (
  "americano" => 20,
  "espresso" => 30,
  "capuccino" => 25,
  "latte" => 35,
  "mocha" => 40.5
);

// Usamos foreach para recorrer el array.
// $tipo → contiene la clave (nombre del café) en cada vuelta
// $precio → contiene el valor (precio del café) en cada vuelta
foreach ($tienda_de_cafes as $tipo => $precio) {
  
  // Imprime el precio del café con su nombre.
  // Las variables $tipo y $precio cambian en cada iteración.
  echo "El precio del café $tipo es: $$precio USD \n";
}

echo "\n"; // Salto de línea para separar la salida

// Ahora, creamos un array de productos para una tienda de ropa.


// Array de productos, cada uno con:
// nombre → nombre del producto
// categoria → categoría a la que pertenece
// precio → precio en pesos colombianos (COP)
$productos = [
    ["nombre" => "Camisa",    "categoria" => "Ropa",     "precio" => 25000],
    ["nombre" => "Pantalón",  "categoria" => "Ropa",     "precio" => 40000],
    ["nombre" => "Zapatos",   "categoria" => "Calzado",  "precio" => 80000],
    ["nombre" => "Bolso",     "categoria" => "Accesorios", "precio" => 150000],
    ["nombre" => "Gorra",     "categoria" => "Accesorios", "precio" => 20000],
    ["nombre" => "Chaqueta",  "categoria" => "Ropa",     "precio" => 120000],
    ["nombre" => "Sandalias",  "categoria" => "Calzado",  "precio" => 60000],
    ["nombre" => "Bufanda",   "categoria" => "Accesorios", "precio" => 30000],
    ["nombre" => "Cinturón",  "categoria" => "Accesorios", "precio" => 25000],
    ["nombre" => "Sombrero",  "categoria" => "Accesorios", "precio" => 35000],
    ["nombre" => "Vestido",   "categoria" => "Ropa",     "precio" => 90000],
    ["nombre" => "Botines",   "categoria" => "Calzado",  "precio" => 95000],
    ["nombre" => "Bufanda de lana", "categoria" => "Accesorios", "precio" => 40000],
    ["nombre" => "Camiseta",  "categoria" => "Ropa",     "precio" => 30000],
    ["nombre" => "Zapatillas deportivas", "categoria" => "Calzado",  "precio" => 70000],
    ["nombre" => "Cartera",   "categoria" => "Accesorios", "precio" => 120000],
    ["nombre" => "Pijama",    "categoria" => "Ropa",     "precio" => 45000],
    ["nombre" => "Botas",     "categoria" => "Calzado",  "precio" => 110000],
    ["nombre" => "Bufanda de seda", "categoria" => "Accesorios", "precio" => 50000],
    ["nombre" => "Chaqueta de cuero", "categoria" => "Ropa",     "precio" => 200000],
    ["nombre" => "Sandalias de playa", "categoria" => "Calzado",  "precio" => 30000],
    ["nombre" => "Gafas de sol", "categoria" => "Accesorios", "precio" => 60000],
    ["nombre" => "Traje de baño", "categoria" => "Ropa",     "precio" => 70000],
    ["nombre" => "Botines de cuero", "categoria" => "Calzado",  "precio" => 130000],
    ["nombre" => "Cinturón de cuero", "categoria" => "Accesorios", "precio" => 40000],
    ["nombre" => "Sombrero de paja", "categoria" => "Accesorios", "precio" => 25000],
    ["nombre" => "Chaqueta impermeable", "categoria" => "Ropa",     "precio" => 180000],
    ["nombre" => "Zapatillas de running", "categoria" => "Calzado",  "precio" => 85000],
    ["nombre" => "Bolso de mano", "categoria" => "Accesorios", "precio" => 95000],
    ["nombre" => "Bufanda de algodón", "categoria" => "Accesorios", "precio" => 35000],
    ["nombre" => "Camiseta de manga larga", "categoria" => "Ropa",     "precio" => 40000],
    ["nombre" => "Sandalias de cuero", "categoria" => "Calzado",  "precio" => 50000],
    ["nombre" => "Gorro de lana", "categoria" => "Accesorios", "precio" => 20000],
    ["nombre" => "Pantalones cortos", "categoria" => "Ropa",     "precio" => 30000],
    ["nombre" => "Botas de montaña", "categoria" => "Calzado",  "precio" => 140000],
    ["nombre" => "Cartera de mano", "categoria" => "Accesorios", "precio" => 110000]
];

// Recorremos el array usando foreach
// $producto contendrá cada elemento del array $productos en cada vuelta
foreach ($productos as $producto) {

    // Mostramos la información de cada producto.
    // number_format() se usa para formatear el precio con separador de miles
    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Categoría: " . $producto["categoria"] . "\n";
    echo "Precio: $" . number_format($producto["precio"], 0, ',', '.') . " COP\n";
    echo "----------------------\n"; // Separador visual
}