<?php
function valores($numeros,$n){
    
for ($i=0; $i <$n; $i++) { 
   echo $numeros[rand(0,count($numeros)-1)].", ";
}

   

echo"<br>";
}

$numeros = array(0,1,2,3,4,5,6,7,8,9,25,36,69,52,34,10,255,239,52,15,58,62,12,15,13,15,15,16,1,8,2,0,22,33 );
 $num = 25; //numero dado 
 $n2=10;
 $n3=20;
 valores($numeros,$num);
 valores($numeros,$n2);
 valores($numeros,$n3);