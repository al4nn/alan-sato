<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_10', 'root', '');

$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,2,3)");

$sql->execute();

$emails = $sql->fetchAll();

print_r($emails);

echo '<hr>';

$sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2017-01-01' AND '2024-11-20'");

$sql->execute();

$emails = $sql->fetchAll();

print_r($emails);
