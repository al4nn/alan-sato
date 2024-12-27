<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_10', 'root', '');

$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE email LIKE '%h%'");

$sql->execute();

$emails = $sql->fetchAll();

print_r($emails);
