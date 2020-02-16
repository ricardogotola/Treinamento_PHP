<?php

function soma(int ...$valores){
    //Definindo o tipo INT na declaracao

    return $valores;
}

echo var_dump(soma(2,2));
echo "<br>";
echo var_dump(soma(1.2,3));