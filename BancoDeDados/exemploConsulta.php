<?php

$conn = new mysqli("localhost", "root","","cursoPHP");

//tratando erro de conexão caso houver
if ($conn  ->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$dataJson = array();

//fetch_assoc tras dados se ouverem sem os índices de banco, somente com o nome da coluna associada
while($row = $result ->fetch_assoc()) {

    //criando uma array para armazenar as informações de row para depois transformar em Json
    array_push($dataJson, $row);
}
//Transformando em o array em Json
echo json_encode($dataJson);
