<?php

$conn = new PDO("mysql:dbname=cursophp;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "==============================<br>";
foreach ($result as $row){
    foreach ($row as $key => $value){

        echo "<strong>" . $key . ": </strong>" . $value . "<br/>";
    }
    echo "==============================<br>";
}