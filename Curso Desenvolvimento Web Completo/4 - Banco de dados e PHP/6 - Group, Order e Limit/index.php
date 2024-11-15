<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_6', 'root', '');
$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` ORDER BY nome ASC LIMIT 3");
$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'];
    echo '<hr>';
}
