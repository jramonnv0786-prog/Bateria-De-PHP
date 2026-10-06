/*
 * BateriaPHP - Un framework PHP ligero y rápido
 * Este archivo es parte del framework BateriaPHP y contiene un ejemplo 
 * de cómo recibir parámetros a través de la URL.
 */
<?php
$nombre = $_GET['nombre']; // Variable de tipo string
$edad = $_GET['años']; // Variable de tipo integer
echo "Hola " . $nombre . ", tienes " . $edad . " años."; // Concatenación de cadenas
?>