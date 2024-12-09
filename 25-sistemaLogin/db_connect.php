<?php
//conexão com banco de dados
$servername = "localhost";
$username = "nildosantos";
$password = "Unama@2024";
$db_name = "sistemalogin";
$connect = mysqli_connect($servername, $username, $password, $db_name);
if (mysqli_connect_error()):
  echo "Falha na conexão: " . mysqli_connect_error();
endif;
