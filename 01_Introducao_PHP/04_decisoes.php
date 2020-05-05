<?php

$idade = 15;
$numeroDePessoas = 2;

echo "\nVocê só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho." . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhadx. Pode entrar." . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Não pode entrar." . PHP_EOL;
}

echo PHP_EOL;
echo "Adeus!";
echo PHP_EOL;

// ternário
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;
echo "\n\n";