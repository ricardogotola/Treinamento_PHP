<?php


function ola(){

    $argumentos = func_get_args();
    // func_get_args ele retorna quantos parâmetros você passar,
    // sem precisar predefinir previamente
    // independente do tipo, string, integer, basta tratar depois na utilização

    return $argumentos;
}

var_dump(ola("valor1", "valor2", "valor3"));