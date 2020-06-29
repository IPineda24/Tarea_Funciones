<?php

function DIV($a){
for ($i=1; $i <= 10; $i++) { 
    $total=$a/$i;
   $total= number_format($total, 2, '.', '');
    echo$a." entre ".$i." = ".$total."<br>";
    
}
}

   

$a=7;
 DIV($a);
 echo"<br>";
 $b=5;
 DIV($b);
 echo"<br>";
 $c=19;
 DIV($c);



