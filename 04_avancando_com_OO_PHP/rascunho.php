<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$umDesenvolvedor = new Desenvolvedor('João da Silva', new Cpf('111.222.333-44'), 3000 );

echo $umDesenvolvedor->nome;

