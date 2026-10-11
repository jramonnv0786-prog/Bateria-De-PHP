<?php
// Primer desplegable: inicios de la frase
$inicios = [
    "Yo en tu lugar",
    "La verdad es que",
    "Tú sabes que",
    "No hay duda de que",
    "Al final"
];

// Segundo desplegable: acciones
$acciones = [
    "siempre hay que invertir en",
    "lo importante es",
    "nunca subestimes",
    "yo siempre digo que",
    "el secreto está en"
];

// Tercer desplegable: cierres absurdos
$cierres = [
    "la bolsa de valores",
    "el no tener dinero congelado en el banco",
    "los chemtrails",
    "la nube",
    "las crypto"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor de frases de cuñado</title>
</head>
<body>
    <option> <?php echo $inicios[0]; ?> </option>
    <option> <?php echo $acciones[0]; ?> </option>
    <option> <?php echo $cierres[0]; ?> </option>
</body>
</html>