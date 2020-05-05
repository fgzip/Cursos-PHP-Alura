<?php

require_once '07_funcoesDoBanco.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.256.789-12'] = depositar(
  $contasCorrentes['123.256.789-12'],
  900
);


$contasCorrentes['123.456.789-10'] = sacar(
  $contasCorrentes['123.456.789-10'],
  500
);

$contasCorrentes['123.456.789-11'] = sacar(
  $contasCorrentes['123.456.789-11'], 
  50
);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

// unset($contasCorrentes['123.456.789-11']);

/*
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";
*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <!-- o ?= substitui o echo para economizar etc -->
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>

  </body>
</html>