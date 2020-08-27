<?php

//isset devuelve un valor true o false dependiendo de si la variable fue definida/seteada

$edad = (isset($edad)) ? $edad : 'El usuario no definio edad';

/*if(isset($edad))
{
    $edad = $edad;
}
else
{
    $edad = 'El usuario no definio edad';
}*/

echo 'Edad: ' . $edad;

?>