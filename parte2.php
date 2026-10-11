<?php
//Mostrar el resultado de cada lanzamiento y el total de lanzamientos realizados.

// Obtiene los resultados anteriores del array
$tiradas = $_GET ["resultados"] ?? '';
// Verifica si se ha presionado el botón de lanzar
if (isset($_GET['lanzar'])) {
// Genera un número aleatorio entre 1 y 6
    $resultado = rand(1,6);
// Agrega el resultado al historial
    $tiradas.= $resultado;
}
// Convierte la cadena de resultados en un array para mostrar el historial
$listatiradas = [];
if ($tiradas !== '') {
    $listatiradas = str_split($tiradas);
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
    <!-- Botón para lanzar el dado -->
    <button type="submit" name="lanzar">Lanzar dado</button> 
    <!-- Hidden, caja de datos dentro del formulario y almacena los resultados -->
     <input type="hidden" name="resultados" value="<?php echo $tiradas; ?>"> 
</form>
   
<?php 
// Verifica si se ha generado un resultado
if (isset($resultado)) { ?> 
<!-- Muestra el resultado del lanzamiento -->
    <p>Has sacado un <?php echo $resultado; ?></p> 
    <!-- Muestra la imagen correspondiente al resultado -->
    <img src="Image/php.<?php echo $resultado; ?>.JPG" alt="Dado <?php echo $resultado; ?>" width="100" height="100"> 
<?php } ?>

<!-- Tabla con historial de tiradas -->
<table border="1">
    <tr>
        <th>Lanzamiento</th>
        <th>Resultado</th>
    </tr>
    <!-- Itera sobre cada resultado y lo muestra en la tabla -->
    <?php foreach ($listatiradas as $i => $valor) { ?> 
        <tr>
            <!-- Muestra el número de lanzamiento -->
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php } ?>
</table>
<!-- Muestra el total de lanzamientos realizados -->
<p>Total de lanzamientos: <?php echo count($listatiradas); ?></p>
</body>
</html>