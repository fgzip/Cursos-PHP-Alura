<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$joao = new Titular(new CPF('123.456.789-10'), 'João da Silva');

$primeiraConta = new Conta($joao);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo "\n";

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$maria = new Titular(new CPF('111.111.111-11'), 'Maria Joaquina');

$segundaConta = new Conta($maria);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('222.222.222-22'), 'Conta fantasia'));

echo Conta::recuperaNumeroDeContas() . PHP_EOL;

unset($outra);

echo Conta::recuperaNumeroDeContas();

echo PHP_EOL;
echo PHP_EOL;