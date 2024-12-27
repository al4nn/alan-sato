<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_9', 'root', '');

$sql = $pdo->prepare("SELECT * FROM `tb_admin.usuarios`");

$sql->execute();

$usuarios = $sql->fetchAll();
foreach ($usuarios as $key => $value) {
    echo $value['nome'];
    echo '<hr>';
}
