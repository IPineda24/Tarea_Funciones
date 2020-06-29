<?php
function valor($n){
    $valor = floatval($n);
    echo number_format($valor, 2, '.', '')."<br>";
}
$n = '122';
echo "$".$n."<br>";
valor($n);

$s = '152';
echo "$".$s."<br>";
valor($s);

$t = '154';
echo "$".$t."<br>";
valor($t);