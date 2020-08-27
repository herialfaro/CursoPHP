<?php

// $amigo = array('telefono' => 123456, 'edad' => 20, 'pais' => 'mexico');

// extract($amigo);

$semana = array(
    'Lunes', 'Martes', 'Miercoles',
    'Jueves', 'Viernes', 'Sabado',
    'Domingo'
);

// $ultimo_dia = array_pop($semana);

// foreach($semana as $dia)
// {
//     echo $dia . '<br />';
// }

// echo $ultimo_dia;

// echo join(' <br />', $semana);

// echo count($semana);

// rsort($semana);
// echo join('<br />',$semana);

$semana_reverse = array_reverse($semana);
echo join('<br />',$semana_reverse);

?>