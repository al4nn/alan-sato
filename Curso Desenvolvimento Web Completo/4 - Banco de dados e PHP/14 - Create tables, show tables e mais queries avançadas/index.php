<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8_aula_14', 'root', '');

$tables = $pdo->query("SHOW TABLES");

$tables = $tables->fetchAll();

echo '<pre>';
print_r($tables);
echo '</pre>';

echo '<hr>';
$sql = 'CREATE TABLE cursos (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome_curso VARCHAR(30) NOT NULL)';

$pdo->exec($sql);
