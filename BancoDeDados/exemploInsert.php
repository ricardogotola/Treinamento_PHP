<?php

$conn = new mysqli("localhost", "root","","cursoPHP");

//tratando erro de conexão caso houver
if ($conn  ->connect_error){
    echo "Error: " . $conn->connect_error;
}

//Cadastrando um usuário, criando a string SQL no $stmt(statement)
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");

//Definindo os parametros que serão passados para a string SQL
$stmt->bind_param("ss", $login, $pass);

//Dando valores as varíáveis para os parâmetros da string SQL
$login="user";
$pass="1234";

//Executando a string no Banco de Dados
$stmt->execute();