<?php

$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses</title>
</head>

<body>
    <h1>Meses</h1>
    <ul>
    <?php

    foreach ($meses as $mes) {
        echo '<li>' . $mes . '</li>';
    }
    //Escribe en pantalla todos los meses usando ciclo foreach
    //Se concatena la etiqueta HTML <li> para que aparezca en formato de lista
    ?>
    </ul>
</body>
</html>