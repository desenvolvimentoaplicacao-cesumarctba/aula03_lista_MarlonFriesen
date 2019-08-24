<?php
echo "Ler uma temperatura em graus Fahrenheit e apresenta-la convertida em graus Celsius.".PHP_EOL;

$F = readline ("digite a temperatura em graus Fahrenheit: " .PHP_EOL);
$C = (( $F - 32 ) * 5) / 9;

echo "a temperatura em graus Celsius é: ".$C."°C";








