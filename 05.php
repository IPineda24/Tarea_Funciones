<?php

function exist($numeros ,$num){
$existe=0;
for ($i=0; $i <count($numeros) ; $i++) { 
    if ($numeros[$i]==$num) {
        $existe++;
    }
    
}
if ($existe==0) {
   echo "no se encontro ningun numero {$num}<br>";
} else {
   
        echo"El numero si se encontro el numero {$num}<br> ";
    }
    
    
}


$numeros = array(0,1,2,3,4,5,6,7,8,9,25,36,69,52,34,10,255,239,52,15,58,62,12,15,13,15,15,16,1,8,2,0,22,33 );
 $num = 25; //numero dado 
 $num2 = 28; //numero dado 
 $num3 = 55; //numero dado 
 
 exist($numeros,$num);
 exist($numeros,$num2);
 exist($numeros,$num3);
 

 