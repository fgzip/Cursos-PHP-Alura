<?php

$carros = [
    'KMS-3221' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],

    'KTZ-2211' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],

    'OPN-8742' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ]
];

foreach($carros as $placa => $carro) {
    echo $placa . ": " . $carro['marca'] . ' - ' . $carro['modelo'] . PHP_EOL;
}

echo "\n";