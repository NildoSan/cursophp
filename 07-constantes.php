<?php

/// constantes

define("NOME", "Marcio Pato");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'Remo']);
echo 'Meu nome é '.NOME.', minha idade é 
'.IDADE.' e minha altura é '.ALTURA.' casado '.CASADO;
echo"<hr>";

echo TIMES[2];