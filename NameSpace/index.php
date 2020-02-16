<?php

require_once "config.php";
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Ricardo Gotola");
$cad->setEmail("ricardogotola@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;