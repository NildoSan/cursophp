<?php

// is_array
$nomes = array("Rodrigo", "Felipe", "Maria", "José");

if (is_array($nomes)):
  echo "é um array";
else:
  echo "Não é um array";
endif;
echo "<hr>";

//in_array

if (in_array("Felipe", $nomes)):
  echo "O valor axite";
else:
  echo "Não exite o valor";
endif;
echo "<hr>";


//array_keys
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

//array_values retorna um array com valores

$values = array_values($nomes);
print_r($values);
echo "<hr>";
// array_unshift adiciona um ou mais elementos no inicio do array
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<hr>";

// array merge
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cg", "cb1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

//array pop, excluir o ultimo da lista
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);

echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

//array shift, exclui o primeiro item da lista
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);

echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<hr>";
//array_unshift, adiciona elementos no inicio do array
$frutas = array("Uva", "Banana", "Abacaxi");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";
//array_push, adiciona elementos no final do array
$frutas = array("Uva", "Banana", "Abacaxi");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

//array_combine, combina os elementos do array
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

// array soma
$soma = array(5, 6, 10, 8);
echo array_sum($soma);
echo "<hr>";

$soma = array(5.8, 6.9, 10.2, 8.7);
echo array_sum($soma);
echo "<hr>";
//explode, transforma string em array
$data = "30/02/2024";
$novaData = explode('/', $data);
print_r($novaData);
$frase = "Meu nome não é Jhonny";
$array = explode(' ', $frase);
print_r($array);
echo "<hr>";
//implode transforma array em string
$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);
echo $string;
