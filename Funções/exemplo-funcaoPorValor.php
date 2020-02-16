<?php

$a =10;

function trocaValor($b){

    $b += 10;

    return $b;
}

echo "Valor inicial da variável: " . $a;
echo "<br>";
echo "Processo-1: " . trocaValor($a);
echo "<br>";
echo "Processo-2: " . trocaValor($a);
echo "<br>";
echo "Valor final da variável inicial: " . $a;
//Por Valor inicial não altera, independente do processo de dentro da função
