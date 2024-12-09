<?php
//funcões para strings
/* strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos
*/
$nome = "nildo dos santos";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

$nome = "nildo dos santos";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

$nome = "nildo dos santos";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";
//

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

if (array_key_exists("Alex", $phone_numbers)) {
  echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
} else {
  echo "Alex's phone number is not in the phone book!";
}

if (array_key_exists("Michael", $phone_numbers)) {
  echo "Michael's phone number is " . $phone_numbers["Michael"] . "\n";
} else {
  echo "Michael's phone number is not in the phone book!";
}
