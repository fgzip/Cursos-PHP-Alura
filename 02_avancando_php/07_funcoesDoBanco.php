<?php

function exibeMensagem($mensagem) {
  echo $mensagem . '<br>';
}
//  array $conta indica que só pode receber um array
// : array significa que o valor retornado será um array
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array 
{
  if ($valorADepositar > 0) {
      $conta['saldo'] += $valorADepositar;
  } else {
      exibeMensagem("Depósitos precisam ser positivos");
  }

  return $conta;
}
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}

function exibeConta(array $conta) 
{
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}