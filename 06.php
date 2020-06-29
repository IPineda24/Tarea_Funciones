

<?php

function mayus($word){
    $n=0;
    foreach ($word as $probar) {
        if (ctype_upper( $probar)) {
            $n++;
        }
    
    }
    return $n;

}

function minu($min){
    $c=0;
    foreach ($min as $probar) {
        if (ctype_lower( $probar)) {
            $c++;
        }
    
    }
    return $c;
}

$phrase = "Hola Mundo XD";

$word = str_split($phrase);

$Mayus = mayus($word);
$Min = minu($word);
 
echo"la frase tine {$Mayus} mayusculas y {$Min} minusculas <br>";
 

$phrase2 = "Probando si El programa FuncioNa";

$word2 = str_split($phrase2);

$Mayus = mayus($word2);
$Min = minu($word2);
 
echo"la frase tine {$Mayus} mayusculas y {$Min} minusculas <br>";