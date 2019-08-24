<?php

ECHO "Calcular a quantidade de litros de combustivel gasta em uma viagem, utilizando um automovel que faz 12 km por litro. ".PHP_EOL; 
ECHO " favor informar tempo gasto na viagem e a velocidade media".PHP_EOL; 

$tempo = readline("digite o tempo gasto: " .PHP_EOL);
$velocidade = readline("digite a velocidade media: " .PHP_EOL);
$distancia = $tempo * $velocidade;
$lts_usados = $distancia/12;
ECHO "".PHP_EOL;
ECHO "RESULTADO: ".PHP_EOL;
ECHO "A velocidade media é: $velocidade km/h".PHP_EOL;
ECHO "O tempo gasto foi: $tempo h. ".PHP_EOL;
ECHO "A distancia percorrida foi: $distancia km".PHP_EOL;
ECHO "A quantidade de litros usadas foi: $lts_usados lts (levando em consideração que o automovel faz 12km por litro.)".PHP_EOL;