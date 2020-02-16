<?php

$a =10;

function trocaValor(&$b){

    $b += 50;

    return $b;
}

echo "Valor inicial da variável: " . $a;
echo "<br>";
echo "Processo-1: " . trocaValor($a);
echo "<br>";
echo "Processo-2: " . trocaValor($a);
echo "<br>";
echo "Valor final da variável inicial: " . $a;

//O valor da varíavel muda fisicamente, o último valor é o que somou ou processou dentro da função