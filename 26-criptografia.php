<?php
$senha = "1023456";
/*$novaSenha = base64_encode($senha);
echo "Base64: " . $novaSenha . "<br>";
echo "Sua senha é: " . base64_decode($novaSenha);

echo "<hr>";
echo "Md5: " . md5($senha) . "<br>";
echo "Sha1: " . sha1($senha);*/
$senha_db = '$2y$10$KCiGRQC/28VBGP8TDm.6FOYzRtZdbXPsTo3ESEol2rYJ3hU.IF9I2';

if (password_verify($senha, $senha_db)):
  echo "Senha válida";
else:
  echo "Senha inválida";
endif;
