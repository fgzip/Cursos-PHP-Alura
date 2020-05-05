<?php

// O array só aceita índices inteiros e texto, por isso o d e o teste são apresentados
$array = [
    1 => 'a',
    '1' => 'b', // O php tenta converter uma chave string para inteiro, por isso o a foi sobrescrito por b
    1.5 => 'c', // O php ignora o ponto flutuante e lê apenas 1, por isso o b foi sobrescrito por c
    true => 'd', // O true é igual a 1, por isso o c foi sobrescrito por d
    'qualquer_coisa' => 'teste'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}