# Bateria-De-PHP
En este proyecto vamos a realizar una batería de ejercicios en PHP.

Ya lo vemos en profundidad en clase más adelante, pero al menos para poder ir haciendo actividades un poquito más complejas, necesitaréis contexto de cómo se envían/reciben los datos por GET en PHP

🔹 Enviar datos por GET

Se envían en la URL después de ? como pares clave=valor.

Ej: <a href="pagina.php?nombre=Ana&edad=20">Ir</a>

La URL quedaría:     pagina.php?nombre=Ana&edad=20

🔹 Recibir datos en PHP
Se accede con $_GET["clave"].

Ejemplo en pagina.php:

<?php

 echo "Hola " . $_GET["nombre"];

 echo "Tienes " . $_GET["edad"] . " años";

?>

Todo lo enviado por GET es visible en la URL.
Ideal para pasar información sencilla entre páginas (¡pero no datos sensibles!).
De todas formas. estos ejercicios los vamos a hacer en clase, por si tenéis alguna duda al respecto, que sería lo más normal.
