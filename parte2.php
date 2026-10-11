
<?php
//Mostrar el resultado de cada lanzamiento y el total de lanzamientos realizados.

// Obtiene los resultados anteriores del array
$tiradas = $_GET ["resultados"] ?? ''; 
// Verifica si se ha presionado el botón de lanzar
if (isset($_GET['lanzar'])) { 
    // Genera un número aleatorio entre 1 y 6
    $resultado = rand(1,6); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de Dado</title>
</head>
<body>
<form method = "get">
    <button type="submit" name="lanzar">Lanzar dado</button> // Botón para lanzar el dado
</form>

<?php 
// Verifica si se ha generado un resultado
if (isset($resultado)) { ?> 
// Muestra el resultado del lanzamiento
    <p>Has sacado un <?php echo $resultado; ?></p> 
    // Muestra la imagen correspondiente al resultado
    <img src="Image/php.<?php echo $resultado; ?>.JPG" alt="Dado <?php echo $resultado; ?>" width="100" height="100"> 
<?php } ?>

</body>
</html>