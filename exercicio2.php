<?php
echo "Ler uma temperatura em graus Celsius e exibi-la convertida em graus Fahrenheit".PHP_EOL;

$Celsius = readline ("digite a temperatura em Celsius: " .PHP_EOL);
$F = ( 9 * $Celsius + 160 ) / 5;

echo "a temperatura em graus Fahrenheit é: ".$F."°F";