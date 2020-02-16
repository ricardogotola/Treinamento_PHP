<?php

$conn = new PDO("mysql:dbname=cursophp;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario=:ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Registro " . $id . " exlcuido com sucesso!";