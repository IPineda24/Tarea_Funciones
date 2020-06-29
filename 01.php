<?php

function mayor($a, $b, $c)
{
    if ($a>$b&&$c) {
        echo 'numero ' . $a . ' es mayor';
    }else{
        if ($b>$c) {
            echo 'numero ' . $b . ' es mayor';
        } else {
            echo 'numero ' . $c . ' es mayor';
        }
        
    }
    
}
function menor($a, $b, $c)
{
    if ($a<$b&&$c) {
        echo 'numero ' . $a . ' es menor';
    }else{
        if ($b<$c) {
            echo 'numero ' . $b . ' es menor';
        } else {
            echo 'numero ' . $c . ' es menor';
        }
        
    }
    
}



    $num1 = 16;
    $num2 = 25;
    $num3 = 18;


    $num4 = 126;
    $num5 = 255;
    $num6 = 108;


    $num7 = 16555;
    $num8 = 2559;
    $num9 = 185;

    echo 'numeros a evaluar ' . $num1. ', '. $num2. ' y '. $num3. '<br>';
    echo '¿calcular numero mayor o menor? <br> <br>';
   
    
    menor($num1, $num4, $num7);
    mayor($num2, $num5, $num8);
    mayor($num3, $num6, $num9);