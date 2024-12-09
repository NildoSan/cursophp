<?php
//arrays

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo"<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5]="Suzuki";

echo $motos[5];
echo"<hr>";

$cliente = ["Rodrigo", "felipe", "Bia"];
print_r($cliente);
echo"<hr>";

// count
$totalCliente = count ($cliente);
echo $totalCliente;
echo"<hr>";
//echo count($cliente);
// Foreach
foreach($cliente as $valor) {
    echo $valor."<br>";
}
echo"<hr>";
// Arrays associativos

$pessoa = array("nome"=> "Rodrigo", "idade" =>23,
"altura"=> 1.75);
echo $pessoa["nome"];
echo "<br>";
echo $pessoa["idade"];
echo "<br>";
echo $pessoa["altura"];
echo "<br>";
foreach($pessoa as $indice =>$valor){
    echo $indice.":".$valor."<br>";
}
echo"<hr>";
// Array multidemensionais

$times = array (
    "Carioca" => array("Campeao"=>"Flamengo", 
    "Vice"=>"Vasco", "terceiro"=>"Botafogo"),
    "Paulista"=> array("Santos", "São paulo", "Palmeiras"),
     "Paraense"=> array ("Campeão"=>"Remo", "Vice"=>"Paysandu", 
     "Terceiro"=>"Tuna Lusa")
);
echo $times["Paulista"][1];
echo "<br>";

foreach($times["Paraense"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}


