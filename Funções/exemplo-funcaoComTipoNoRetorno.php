<?php

//se entrar float ele soma os decimais, mas se sair int ele arredonda, se sair float ele mostra os decimais
function soma(float ...$valores):float {

    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(1.2,3.4);
echo "<br>";
echo soma(12,34);

//Independente da definição da saída, se entrar int o resultado mesmo float será arredondado
function soma1(int ...$valores):float {

    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(1.2,3.4);
echo "<br>";
echo soma(12,34);