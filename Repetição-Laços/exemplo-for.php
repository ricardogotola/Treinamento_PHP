<?php

for ($i =0; $i <= 10; $i++) {

    echo $i . "<br>";
}
    echo "<br>";

    for ($i =0; $i <= 100; $i+=5) {

        if($i >= 30 && $i <= 50) continue;

        if($i === 90) break;

    echo $i . "<br>";
}