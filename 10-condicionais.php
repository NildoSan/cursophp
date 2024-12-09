<?php

/*
  Condicionais
  if
   else
   elseif
*/
$numero = 50;

if ($numero == 10):
  echo "É igual a 10";
else:
  echo "é diferente de 10";
endif;
echo "<hr>";
$media = 8;
echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo "<hr>";
/*
condiionais
switch
case
*/
$cor = "cinza";
switch ($cor):
  case "vermelho":
    echo "Sua cor preferia é o vermelho";
    break;

  case "verde":
    echo "Sua cor preferida é o verde";
    break;

  case "azul":
    echo "Sua cor preferida é o azul";
    break;

  default:
    echo " Sua cor preferida não é vermelho, verde e nem azul!";
endswitch;
