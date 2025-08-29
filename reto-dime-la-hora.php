<?php

// Definimos una función que nos devuelve la hora actual en Bogotá
function obtener_hora() {
  // Configuramos la zona horaria a la de Bogotá (América/Bogotá)
  date_default_timezone_set('America/Bogota');
  
  // Retornamos la hora actual con formato:
  // h = hora (12 horas), i = minutos, a = am/pm
  return date('h:i a');
}

// Mostramos un mensaje inicial en pantalla
echo "¡Hola! ¿Me podria decir que hora es? \n";

// Concatenamos el texto con el resultado de la función obtener_hora()
echo "¡claro! Son las " . obtener_hora();

// Agregamos un salto de línea compatible con el sistema operativo
echo PHP_EOL;
