<?php
// Primer desplegable: inicios de la frase.
$inicios = [
    "Yo en tu lugar ",
    "La verdad es que ",
    "Tú sabes que ",
    "No hay duda de que ",
    "Al final "
];

// Segundo desplegable: acciones.
$acciones = [
    "siempre hay que invertir en ",
    "lo importante es ",
    "nunca subestimes ",
    "yo siempre digo que ",
    "el secreto está en "
];

// Tercer desplegable: cierres absurdos.
$cierres = [
    "la bolsa de valores",
    "el no tener dinero congelado en el banco",
    "los chemtrails",
    "la nube",
    "las crypto"
]; 
//Guarda los valores seleccionados de los desplegables.
 if (!empty($_GET["Inicios"])) {
    $inicio_seleccionado = $_GET["Inicios"];
 }
 if (!empty($_GET['Acciones'])) {
    $accion_seleccionada = $_GET['Acciones'];
 }
 if (!empty($_GET['Cierres'])) {
    $cierre_seleccionado = $_GET['Cierres'];
    
 }
  // Generar una frase aleatoria.
 if (isset($_GET['GenerarFraseAleatoria'])) {
    $frasecompleta = $inicios[array_rand($inicios)] . $acciones[array_rand($acciones)] . $cierres[array_rand($cierres)] . '.';
 }


 // Guardar los valores escritos en los inputs.
 //!empty() devuelve true si la variable tiene contenido, así solo se usa el input si el usuario ha escrito algo.
 if (!empty($_GET['Inicios_Frase'])) {
    $inicio_seleccionado = $_GET['Inicios_Frase'] . ' ';
 }
 if (!empty($_GET['Acciones_Frase'])) {
    $accion_seleccionada = $_GET['Acciones_Frase'] . ' ';
 }
 if (!empty($_GET['Cierres_Frase'])) {
    $cierre_seleccionado = $_GET['Cierres_Frase'] . '';
 }

     // Concatenar los valores seleccionados para formar la frase completa.
 if (isset($_GET['GenerarFrase'])) {
    $frasecompleta = $inicio_seleccionado . $accion_seleccionada . $cierre_seleccionado . '.'; 
 }
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
        <!-- div para agrupar los elementos del primer desplegable y su input. -->
     <div>


        <!-- Primer desplegable: inicios de la frase. -->
        <select name="Inicios">
            <?php foreach ($inicios as $inicio) { ?>
                <option value="<?php echo $inicio; ?>" <?php if (isset($inicio_seleccionado) && $inicio_seleccionado === $inicio) echo 'selected'; ?>> <?php echo $inicio; ?> </option>
            <?php } ?>
        </select>


        <!-- br para separar el desplegable del input. -->
        <br>


        <!-- Input para escribir el inicio de la frase con placeholder. -->
        <input type="text" name="Inicios_Frase" placeholder="Escribe el inicio...">
     </div>
     <div>



        <!-- Segundo desplegable: acciones. -->
        <select name="Acciones">
            <?php 



            // Recorrer el array de acciones y crear las opciones del desplegable.
            foreach ($acciones as $accion) { ?>
                <option value="<?php echo $accion; ?>" <?php if (isset($accion_seleccionada) && $accion_seleccionada === $accion) echo 'selected'; ?>> <?php echo $accion; ?> </option>
            <?php } ?>
        </select>
        <br>


        <!-- Input para escribir la acción de la frase. -->
        <input type="text" name="Acciones_Frase" placeholder="Escribe el nudo...">
     </div>
     <div>


        <!-- Tercer desplegable: cierres absurdos. -->
        <select name="Cierres">
            <?php 
            foreach ($cierres as $cierre) { ?>
                <option value="<?php echo $cierre; ?>" <?php if (isset($cierre_seleccionado) && $cierre_seleccionado === $cierre) echo 'selected'; ?>> <?php echo $cierre; ?> </option>
            <?php } ?>
        </select>
        <br>



        <!-- Input para escribir el cierre de la frase. -->
        <input type="text" name="Cierres_Frase" placeholder="Escribe el cierre...">
     </div>



         <!-- Botón para generar la frase -->
        <button type="submit" name="GenerarFrase">Generar frase</button>


        <!-- Botón para generar una frase aleatoria. -->
        <button type="submit" name="GenerarFraseAleatoria">Frase aleatoria</button> 
    </form>

    
    <!-- Mostrar la frase completa si se ha generado. -->
    <?php if (isset($frasecompleta)) { ?> 
        <p><?php echo $frasecompleta; ?></p>
        <?php } ?>
</body>
</html>
