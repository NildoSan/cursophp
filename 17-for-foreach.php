<?php
for ($contador = 0; $contador <= 10; $contador++):
  echo "O contador é $contador <br>";

endfor;
for ($contador = 0; $contador <= 10; $contador++):
  echo " 8 X $contador = " . ($contador * 8) . "<br>";
endfor;
echo "<hr>";
$cores = array("verde", "vermelho", "Azul", "preto");
foreach ($cores as $indice => $valor):
  echo $indice . "-" . $valor . "<br>";
endforeach;
