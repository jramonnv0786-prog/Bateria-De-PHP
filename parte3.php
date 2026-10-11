<?php
// Primer desplegable: inicios de la frase
$inicios = [
    "Yo en tu lugar ",
    "La verdad es que ",
    "Tú sabes que ",
    "No hay duda de que ",
    "Al final "
];

// Segundo desplegable: acciones
$acciones = [
    "siempre hay que invertir en ",
    "lo importante es ",
    "nunca subestimes ",
    "yo siempre digo que ",
    "el secreto está en "
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
    <!-- Título de la página -->
    <title>Constructor de frases de cuñado</title>
</head>
<body>
    <form method="get">
        <!-- Primer desplegable: inicios de la frase -->
        <select name="Inicios">
            <?php foreach ($inicios as $inicio) { ?>
                <option> <?php echo $inicio; ?> </option>
            <?php } ?>
        </select>
        <!-- Segundo desplegable: acciones -->
        <select name="Acciones">
            <?php foreach ($acciones as $accion) { ?>
                <option> <?php echo $accion; ?> </option>
            <?php } ?>
        </select>
        <!-- Tercer desplegable: cierres absurdos -->
        <select name="Cierres">
            <?php foreach ($cierres as $cierre) { ?>
                <option> <?php echo $cierre; ?> </option>
            <?php } ?>
        </select>
         <!--Botón para generar la frase -->
        <button type="submit" name="generar">Generar frase</button>
    </form>
</body>
</html>