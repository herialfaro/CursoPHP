<?php

function saludo($nombre){
    return 'Hola, ' . $nombre;
}

echo saludo('Carlos') . '<br />';
echo saludo('Manuel') . '<br />';
echo saludo('Alejandro') . '<br />';

// function sumar($numero1,$numero2){
//     $resultado = $numero1 + $numero2;
//     return $resultado;
// }

// $suma = sumar(5,10);
// echo $suma;

?>