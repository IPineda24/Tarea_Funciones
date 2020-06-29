<?php

function DIV($a,$b){
while ($a>$b) {
    $b+=$b;
}
echo $b;
}

   

echo"dato 1<br>";
$a=22;
$b=7;
 DIV($a,$b);
 
echo"<br>dato 2<br>";
 $c=225;
  $d=6;
 DIV($c,$d);
 
echo"<br>adato 3<br>";
 $e=2256;
 $f=12;
DIV($e,$f);