<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

$id = 3;

// OR funciona como 'ou'
// AND funciona como 'e'

$sql = $pdo->prepare("UPDATE `clientes` SET nome='João', sobrenome='Pereira' WHERE nome='Mario' OR nome='Alan'");

if ($sql->execute()) {
    echo 'Meu cliente foi atualizado com sucesso!';
}
