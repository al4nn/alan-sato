<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_9', 'root', '');

$pdo->exec("LOCK TABLES `tb_admin.usuarios` WRITE");

sleep(10);