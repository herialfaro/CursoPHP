<?php

$numero1 = 10;
$numero2 = 5;

$numero1 += 7;

$variable = 'true';

if($variable === true)
{
    echo 'Es mismo valor, mismo tipo';
}
else 
{
    echo 'No es mismo valor o mismo tipo';
}

if($numero1 >= 15 && $numero2 = 5)
{
    echo 'Ejecuta';
}

$texto1 = 'Cadena';
$texto2 = ' de texto';

$concat = $texto1 . $texto2;
$concat .= ' concatenado';
echo $concat;

?>