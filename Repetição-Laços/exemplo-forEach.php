<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes){
    echo "O mês é: " . $index . " - " .  $mes;
    echo "<br>";
}