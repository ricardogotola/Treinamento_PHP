<?php

echo date("d/m/y h:i:s");
//y minúsculo traz os 2 últimos dígitos do ano
//Y maiúsculo traz os 4 dígitos do ano
//h minúsculo traz no formato 12 horas
//H maiúsculo traz no formato 24 horas

echo "<br>";
echo "<br>";

//quantidade de segundos desde 01/01/1970 até hoje
echo time();

echo "<br>";
echo "<br>";

//convertendo o timestamp para mostrar a data e hora do determinado timestamp
echo date("d/m/Y H:i:s", 1581561566);

echo "<br>";
echo "<br>";

//permite colocar expressões, gera o timestamp e converte na data
$ts = strtotime("now");
$ts1 = strtotime("+1 week");
$ts2 = strtotime("+1 month");
$ts3 = date(strtotime("+1 year"));

//L minúsculo mostra o dia da semana
echo date("l, d/m/Y", $ts);
echo "<br>";
echo date("l, d/m/Y", $ts1);
echo "<br>";
echo date("l, d/m/Y", $ts2);
echo "<br>";
echo date("l, d/m/Y", $ts3);
echo "<br>";

