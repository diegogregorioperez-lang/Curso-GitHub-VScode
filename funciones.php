<?php
/**
 * Calcula el precio con IVA.
 * @param float $precio Precio sin IVA.
 * @param int $iva Porcentaje de IVA.
 * @return float Precio final.
 */
function precioConIva($precio, $iva) {
    return $precio * (1 + $iva / 100);
}

/**
 * Función que saluda a una persona cuyo nombre es pasado como parámetro
 * @param string $nombre - Nombre de la persona a saludar
 * @return void - echo de un saludo hacia una persona
 */
function saludoDeDiego(String $nombre) {
    echo ("Hola ".$nombre);
}
?>