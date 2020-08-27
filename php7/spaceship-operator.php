<?php

//Operador de nave espacial

//Regresa 1 si el valor en la izquierda es mayor que el de la derecha
//Regresa 0 si ambos valores son iguales
//Regresa -1 si el valor en la derecha es mayor que el de la izquierda

// echo 1 <=> 2;
// echo '<br />';
// echo 1 <=> 1;
// echo '<br />';
// echo 3 <=> 2;
// echo '<br />';

$arreglo = [3,5,1,4,8];
// sort($arreglo);

function comparar($a,$b)
{
    return $a <=> $b;
}
usort($arreglo,'comparar');

echo implode(' - ',$arreglo);