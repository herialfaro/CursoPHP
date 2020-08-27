<?php

$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$usuario = array(
    'nombre' => 'Alejandro', 'edad' => 20, 'telefono' => 4771234567
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
</head>

<body>
    <h1>Usuario</h1>
    <ul>
    <?php
    foreach($usuario as $dato => $valor)
    {
        echo '<li>' . $dato . ': ' . $valor . '</li>';
    }
    ?>
    </ul>
</body>
</html>