<?php
//Trabajando con Strings "Cachondas"

$frase= "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";
$palabras = explode(" frío ", $frase);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabajando con strings "cachondas"</title>
</head>
<body>
    
    <p><?php echo $frase; ?></p>
    <!-- Imprime la cantidad de palabras resultante de la función explode() -->
    <p><?php echo count($palabras); ?></p>
    <!-- Imprime el array de palabras resultante de la función explode() -->
<pre> <?php print_r($palabras); ?> </pre>
</body>
</html>