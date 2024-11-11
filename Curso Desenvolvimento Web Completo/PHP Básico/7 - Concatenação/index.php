<?php
$nome = 'Alan';
$idade = 28;

echo 'Meu nome é ' . $nome;

define('NOME', 'João');

echo 'Meu nome é' . NOME;

$frase = 'Meu nome é '; 

echo $frase . $nome;

echo "Meu nome é $nome";

$nomeDaClasse = 'box';

echo "<div class=\"$nomeDaClasse\">Meu conteúdo da div</div>";
?>