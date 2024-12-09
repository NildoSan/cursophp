<?php
//operadores lógicos
//nos permitem fazer comparações entre expressãos
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
//negação (!)
$idade = 25;
$nome = "Rodrigo";
if (($idade == 25) and ($nome == "Rodrigo")):
  echo "É verdadeiro";
else:
  echo "É falso";
endif;
