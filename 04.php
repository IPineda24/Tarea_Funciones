<?php

function rango($num,$n1,$n2){

   if ($num>=$n1 && $num<=$n2) {
       echo $num." esta dentro del rango <br>";
   } else {
    echo $num." no esta dentro del rango <br>";
   }
   
}


 $num = 15; //numero dado 
 $n1=12;
 $n2=18;
 echo "rango entre ".$n1." y ".$n2."<br>";
 rango($num,$n1,$n2);
 

 $num2 = 51; //numero dado 
 $n12=12;
 $n22=59;
 echo "rango entre ".$n12." y ".$n22."<br>";
 rango($num2,$n12,$n22);


 

 $num3 = 245; //numero dado 
 $n13=12;
 $n23=58;
 echo "rango entre ".$n13." y ".$n23."<br>";
 rango($num3,$n13,$n23);