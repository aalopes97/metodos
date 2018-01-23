<?php

require 'Conta.php';

$conta = new Conta();

echo "Saldo Inicial = R$".$conta->saldo .PHP_EOL;
$conta->deposita("2000 maças");
echo "Saldo Final = R$".$conta->saldo .PHP_EOL;
