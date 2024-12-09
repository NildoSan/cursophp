<?php
//Cookie
setcookie('user', 'Ronildo Souza', time() + 3600);
setcookie('email', 'Ronildo@gmail.com', time() + 3600);
setcookie('ultima_pesquisa', 'tenis adidas', time() + 3600);
var_dump($_COOKIE);
