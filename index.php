<?php

require_once('src/funcoes.php');

use SRC\Funcoes as functions;

$ob = new functions();

echo "Século: ". $ob->SeculoAno('1905'). '<br>';

echo "Número primo anterior: ". $ob->PrimoAnterior('29'). '<br>';

$array = [
    [25, 22, 18],
    [10, 15, 13],
    [24, 5, 2],
    [80, 17, 15]
];

echo "Segundo maior: " . $ob->SegundoMaior($array). '<br>';


$numeroSequencia = [1, 3, 2, 1]; //false;
//$numeroSequencia = [1, 3, 2]; // true;
//$numeroSequencia = [1, 2, 1, 2]; //false
//$numeroSequencia = [3, 6, 5, 8, 10, 20, 15]; //false
//$numeroSequencia = [1, 1, 2, 3, 4, 4]; //false
//$numeroSequencia = [1, 4, 10, 4, 2]; // false
//$numeroSequencia = [10, 1, 2, 3, 4, 5]; //true
//$numeroSequencia = [1, 1, 1, 2, 3]; //false
//$numeroSequencia = [0, -2, 5, 6]; //true
//$numeroSequencia = [1, 2, 3, 4, 5, 3, 5, 6]; // false
//$numeroSequencia = [40, 50, 60, 10, 20, 30]; // false
//$numeroSequencia = [1, 1] ; //true
//$numeroSequencia = [1, 2, 5, 3, 5]; // true
//$numeroSequencia = [1, 2, 5, 5, 5] ; //false
//$numeroSequencia = [10, 1, 2, 3, 4, 5, 6, 1] ; //false
//$numeroSequencia = [1, 2, 3, 4, 3, 6]; // true
//$numeroSequencia = [1, 2, 3, 4, 99, 5, 6]; // true
//$numeroSequencia = [123, -17, -5, 1, 2, 3, 12, 43, 45]; // true
//$numeroSequencia = [3, 5, 67, 98, 3] ; //true
//$numeroSequencia = [0, 5, 67, 6, 10] ; //true

$sequencia = $ob->SequenciaCrescente($numeroSequencia) ? 'TRUE' : 'FALSE';
echo "Sequência: ". $sequencia; 
