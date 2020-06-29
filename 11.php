<?php

function npar($numeros,$n){
    $nuevo=array();
for ($i=0; $i <count($numeros) ; $i++) { 
    if ($numeros[$i]%2==0) {
       $valor=$numeros[$i];
       array_push( $nuevo,$valor);
    }
}
for ($i=0; $i < $n; $i++) {
   echo $nuevo[rand(0,count($nuevo)-1)].", ";
}
echo"<br>";
}
 

function nimpar($numeros,$n){
    $nuevo=array();
for ($i=0; $i <count($numeros) ; $i++) { 
    if ($numeros[$i]%2!=0) {
       $valor=$numeros[$i];
       array_push( $nuevo,$valor);
    }
}
for ($i=0; $i < $n; $i++) {
   echo $nuevo[rand(0,count($nuevo)-1)].", ";
}
echo"<br>";
}


   

$numeros = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,13,15,15,16,1,8,2,0,22,33 );
 $n=5;
 $m=8;
 $o=16;
 echo"pares<br>";
 npar($numeros,$n);
 echo"impares<br>";
 nimpar($numeros,$m);
 echo"pares<br>";
 npar($numeros,$o);