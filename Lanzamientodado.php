/* Ejercicio 1 lanzamiento de dado */

<?php
$rand1 = rand(1,6); // Genera un número aleatorio entre 1 y 6
$_GET["número"] = $rand1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamiento de Dado</title>
</head>
<body>

<a href="Lanzamientodado.php">Lanzar dado</a>
<img src="php.1<?php echo $_GET['número']; ?>.png" alt="Dado" width="100" height="100">

</body>
</html>