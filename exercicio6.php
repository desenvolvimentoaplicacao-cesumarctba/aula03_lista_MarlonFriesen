<?php

echo "   Índice de massa corporal (IMC)" .PHP_EOL;
echo " Uma medida da gordura corporal em adultos" .PHP_EOL;
echo "".PHP_EOL;
$altura = readline ("informe sua altura: " .PHP_EOL);
$peso = readline ("informe seu peso: " .PHP_EOL);
$alturat = $altura * $altura;
$imc = $peso / $alturat;

switch ($imc) {
  case $imc <18.5:
  echo "Abaixo do peso";
  break;
  case $imc >= 18.5 && $imc <= 24.9:
  echo "Peso normal";
  break;
  case $imc >= 25 && $imc <= 29.9:
  echo "SobrePeso";
  break;
  case $imc >= 30 && $imc <= 34.9:
  echo "Obesidade grau 1";
  break;
  case $imc >= 35 && $imc <= 39.9:
  echo "Obesidade grau 2";
  case $imc >= 40:
  echo "Obesidade grau 3";
  break;
  default:
  echo "Peso invalido";
  break;

}
echo "".PHP_EOL;
echo "O seu IMC é: $imc .".PHP_EOL;

echo "Confira a seguir o que significam os resultados

Tabela e resultados - IMC
O IMC pode trazer os seguintes resultados:

IMC	Resultado
Menos do que 18,5	Abaixo do peso
Entre 18,5 e 24,9	Peso normal
Entre 25 e 29,9	Sobrepeso
Entre 30 e 34,9	Obesidade grau 1
Entre 35 e 39,9	Obesidade grau 2
Mais do que 40	Obesidade grau 3
".PHP_EOL;

