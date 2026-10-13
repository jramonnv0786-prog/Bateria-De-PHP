<?php
//Trabajando con Strings "Cachondas" OPCIÓN B.


// Frase con la palabra "frío" repetida varias veces.
$frase= "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";



// La función explode divide el string usando como separador " frío",
//y devuelve un array con las palabras resultantes de la separación.
$palabras = explode(" frío", $frase);



//La función implode une los elementos de un array en un string.
$frasesinfrio = implode("", $palabras);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabajando con strings "cachondas"</title>
</head>
<body>

    <!-- Imprime el string -->
    <p><?php echo $frase; ?></p>



    <!-- Imprime la cantidad de palabras resultante de la función explode -->
    <p><?php echo count($palabras); ?></p>

<!-- Imprime el array de palabras resultante de la función explode -->
<!-- <pre> respeta los saltos de línea y espacios, así el print_r del array se ve ordenado. -->
<pre> <?php print_r($palabras); ?> </pre> 


<!-- Imprime el string resultante de la función implode -->
<p><?php echo $frasesinfrio; ?></p>
<pre> [<?php echo $frasesinfrio; ?>] </pre> 
</body>
</html>