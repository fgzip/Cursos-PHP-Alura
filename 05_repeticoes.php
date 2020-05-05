<?php

$contador = 1;

while ($contador <= 15) {
    echo $contador . PHP_EOL;
    $contador++;
}

// Como só teremos uma instrução, não precisaríamos usar as chaves
// Mas eu prefiro usar sempre rs
for($i = 1; $i <= 15; $i++) {
    echo $i . PHP_EOL;
}

for($j = 1; $j <= 15; $j++) {
    if ($j == 13) {
        break;
    }
    echo $j . PHP_EOL;
}