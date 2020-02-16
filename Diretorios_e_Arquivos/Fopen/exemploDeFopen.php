<?php

$file = fopen("log.txt","a+");
//Para pular linha concatenar com "\r\n"
fwrite($file,date("Y-m-d H:i:s"). "\r\n");
fclose($file);

echo "Arquivo crado com sucesso";
