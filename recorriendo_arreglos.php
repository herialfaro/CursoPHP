<?php

$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// for($i = 0; $i < count($meses); $i++)
// {
//     echo $meses[$i] . '<br />';
// }

$icounter = 0;
while($icounter < count($meses))
{
    echo $meses[$icounter] . '<br />';
    $icounter++;
}

?>