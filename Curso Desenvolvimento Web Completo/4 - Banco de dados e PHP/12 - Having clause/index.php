<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_12', 'root', '');

$select = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo HAVING pontos > 5");

$select->execute();

echo '<pre>';
var_dump($select->fetchAll());
echo '</pre>';
