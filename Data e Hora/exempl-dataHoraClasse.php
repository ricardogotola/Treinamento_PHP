<?php

$dt = new DateTime();

//utilizando o método para adicionar um período na data
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);
echo "<br>";

//-> acessa os métodos das classes
echo $dt->format("d/m/Y H:i:s");
