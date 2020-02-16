<?php

$conn = new PDO("mysql:dbname=cursophp;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario=?");

$id = 2;

$stmt->execute(array($id));

//tollback() cancela transação se algo da verificação der errado
//$conn->rollBack();

//commit confirma a transação se todas verificação for bem sucedida
$conn->commit();

echo "Registro " . $id . " exlcuido com sucesso!";