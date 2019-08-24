<?php
echo "Ler uma temperatura em graus Fahrenheit e apresenta-la convertida em graus Kelvin.".PHP_EOL;

$F = readline ("digite a temperatura em graus Fahrenheit: " .PHP_EOL);
$C = (( $F - 32 ) * 5) / 9;
$K = $C + 273.15;

echo "a temperatura em graus Kelvin é: ".$K."K ";

