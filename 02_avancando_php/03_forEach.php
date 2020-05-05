<?php

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Vinícius',
    'saldo' => 1000
  ],

  '123.456.789-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],

  '123.456.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

// Como neste caso, o array não tem índice numérico, o primeiro índice disponível é 0, por isso é o que vai aparecer
// Se os cpfs estivessem como número, o último seria incrementado
$contasCorrentes[] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

$contasCorrentes[] = [
  'titular' => 'Maria',
  'saldo' => 2002
];

// Você precisa adicionar uma chave para que o dado faça sentido
$contasCorrentes['123.456.789-55'] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}