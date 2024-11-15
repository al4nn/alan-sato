<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_6', 'root', '');

$sql = $pdo->prepare("SELECT * FROM `clientes` INNER JOIN `cargos` ON `clientes` . `cargo` = `cargos` . `id`");
$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'];
    echo ' | ';
    echo $value['nome_cargo'];
    echo '<hr>';
}

echo '<hr>';

$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN `cargos` ON `clientes` . `cargo` = `cargos` . `id`");
$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'];
    echo ' | ';
    echo $value['nome_cargo'];
    echo '<hr>';
}

echo '<hr>';

$sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN `cargos` ON `clientes` . `cargo` = `cargos` . `id`");
$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'];
    echo ' | ';
    echo $value['nome_cargo'];
    echo '<hr>';
}

echo '<hr>';
