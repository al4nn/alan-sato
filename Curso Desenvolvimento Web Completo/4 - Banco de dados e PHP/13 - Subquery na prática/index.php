<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_12', 'root', '');

$sql = $pdo->prepare("SELECT * FROM `filmes` WHERE categoria_id = (SELECT categoria_id FROM `categorias` WHERE nome = 'terror')");

$sql->execute();

echo '<pre>';
var_dump($sql->fetchAll());
echo '</pre>';