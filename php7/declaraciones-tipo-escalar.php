<?php
declare(strict_types=1);
function cuadrado(int $numero)
{
    return $numero * $numero;
}

$numero = 5;
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);