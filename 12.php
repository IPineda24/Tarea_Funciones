<?php

function check($a,$b){
for ($i=0; $i < count($a); $i++) { 
    $a[$i];
    for ($d=0; $d <count($b) ; $d++) { 
        if ($a[$i]==$b[$d]) {
           echo"posiscion {$i} coincide con la posicion {$d} <br>";
        }
    }
}
}

   

echo"array 1<br>";
$array1 =array ('a','e','i','o','u');
$array2 = array ('u', 'a','i', 'o','e','f');
 check($array1,$array2);

echo"<br>array 2<br>";
 $array3 =array ('s','e','i','8','u');
$array4 = array ('u', '8','i', 's','e','f');
 check($array3,$array4);


 echo"<br>array 3<br>";
 $array5 =array ('l','e','f','8','u');
 $array6 = array ('u', '8','7', 's','e','f');
  check($array5,$array6);