<?php
$qualASuaIdade = 66;

$idadeCrianca= 12;
$idadeMaior= 18;
$idadeMelhor= 66;

if ($qualASuaIdade <= $idadeCrianca) {

        echo "É uma criança";

} elseif ($qualASuaIdade > 12 && $qualASuaIdade < $idadeMelhor) {
    echo "É um adulto.";

} else {
    echo "É um idoso.";

}
    echo "<br>";

    echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

    ?>