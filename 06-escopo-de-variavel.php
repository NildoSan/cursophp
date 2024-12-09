<?php

// ESCOPO GLOBAL//

$nome = "Nildo Santos";

$a = 6;
$b = 8;
$c = 2;

function exibeNome(){
    global $nome;
    echo $nome;
    
}

exibeNome();
echo "<hr>";
/////////////

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo"<hr>";
///////////////////

function soma() {

 echo $GLOBALS['a']+  $GLOBALS ['b'] + $GLOBALS['c'];
}
SOMA();