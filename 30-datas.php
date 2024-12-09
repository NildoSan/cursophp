<?php

date_default_timezone_set('America/Belem');
echo date('d/m/Y H:i:s');
echo "<hr>";


//MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2024);
echo date('d/m/Y - h:i', $data_pagamento);
