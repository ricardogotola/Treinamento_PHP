<?php

$total = 100;
$desconto = 0.90;

do{
    $total *= $desconto;
    echo "$total";
    echo "<br>";
    }while($total > 50);
        echo "$total";

