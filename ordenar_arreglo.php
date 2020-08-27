<?php

$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 100, 22, 340, 12, 15, 67, 1000);

sort($numeros);
rsort($numeros);

//sort ordena los strings del arreglo alfabeticamente
//rsort significa reverse sort, hace lo mismo que sort pero a la inversa

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numeros</title>
</head>

<body>
    <h1>Numeros</h1>
    <ul>
    <?php

    foreach ($numeros as $numero) {
        echo '<li>' . $numero . '</li>';
    }
    //Escribe en pantalla todos los meses usando ciclo foreach
    //Se concatena la etiqueta HTML <li> para que aparezca en formato de lista
    ?>
    </ul>
</body>
</html>