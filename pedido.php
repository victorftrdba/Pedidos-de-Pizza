<?php

$pdo = new PDO('mysql:host=localhost;dbname=testes', 'root', 'dev102030');
$stmt = $pdo->prepare('INSERT INTO pedido (nome, calabresa, queijo, presunto, total) VALUES (:nome, :calabresa, :queijo, :presunto, :total)');
$stmt->bindValue(':nome', $_POST['nome']);
$stmt->bindValue(':calabresa', $_POST['calabresa']);
$stmt->bindValue(':queijo', $_POST['queijo']);
$stmt->bindValue(':presunto', $_POST['presunto']);
$stmt->bindValue(':total', $_POST['total']);
$stmt->execute();

header("Location: index.php?pedidoSucesso=pedido");