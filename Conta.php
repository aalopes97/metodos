<?php

class Conta
{
  public $numero;
  public $saldo;

function deposita(float $valor){
    $this->saldo += $valor;
  }
}

 ?>
