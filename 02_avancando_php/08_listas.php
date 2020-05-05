<?php

$idadeList = [21, 23, 24, 19, 25, 30, 41, 19];

/*
$idadeVinicius = $idadeList[0];
$idadeJoao = $idadeList[1];
$idadeMaria = $idadeList[2];
*/

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
  echo $idade . PHP_EOL;
}