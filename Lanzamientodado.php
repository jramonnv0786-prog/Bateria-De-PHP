<?php
/* Ejercicio 1 lanzamiento de dado */

if (isset($_GET['lanzar'])) { // Verifica si se ha presionado el botón de lanzar
    $resultado = rand(1,6); // Genera un número aleatorio entre 1 y 6
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
    <button type="submit" name="lanzar">Lanzar dado</button>
</form>

<?php if (isset($resultado)) { ?>
    <p>Has sacado un <?php echo $resultado; ?></p> // Muestra el resultado del lanzamiento
    <img src="Image/php.<?php echo $resultado; ?>.JPG" alt="Dado <?php echo $resultado; ?>" width="100" height="100">
<?php } ?>

</body>
</html>
