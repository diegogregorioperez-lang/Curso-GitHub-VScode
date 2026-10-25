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
 * Devuelve un saludo personalizado.
 *
 * @param string $nombre Nombre de la persona a saludar.
 * @return string Saludo completo.
 */
function saludoDiego(string $nombre): string {
    return "Hola " . $nombre . ", soy Diego";
}

?>