<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[2];

// Se o índice não for declarado, adiciona no final
$idadeList[0] = 1;
$idadeList[] = 20;

echo PHP_EOL;

// Loop para percorrer o array (count equivale ao length)
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

echo PHP_EOL;

$nomes = ["João", "Maria", "Pedro", "Ana"];

for ($j = 0; $j < count($nomes); $j++) {
    echo $nomes[$j] . PHP_EOL;
}

echo PHP_EOL;