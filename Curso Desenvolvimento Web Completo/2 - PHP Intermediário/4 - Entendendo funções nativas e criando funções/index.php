<?php
function mostrarNome($nome, $idade)
{
    echo '<h2>Nome é: ' . $nome . '</h2>';
    echo '<hr>';
    echo "Idade: $idade";
}

mostrarNome('Alan', 28);

echo '<hr>';

function calculadora($numero1 = 10, $numero2 = 5)
{
    echo ($numero1 + $numero2);
}

calculadora(20, 30);

echo '<hr>';

function verdade()
{
    return true;
}

$variavel = verdade();

echo $variavel;

echo '<hr>';

function retornarString()
{
    return 'Alan';
}

echo retornarString();
