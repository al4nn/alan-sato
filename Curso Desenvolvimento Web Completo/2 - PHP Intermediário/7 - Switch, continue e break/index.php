<?php
$nome = 'Alan';

if ($nome == 'Alan') {
    echo 'Verdadeiro';
}

echo '<hr>';

switch ($nome) {
    case 'Alan':
        echo 'Alan';
        break;
    case 'João':
        echo 'João';
        break;
};

echo '<hr>';

// BREAK para o loop FOR, WHILE, DO, FOREACH e SWITCH;
// CONTINUE para FOR, WHILE, DO e FOREACH
for ($i = 0; $i < 10; $i++) {
    // if ($i == 5 || $i == 9)
    //     continue;
    echo $i;
    echo '<hr>';

    // if ($i == 5)
    //     break;
}

$var = true;

if ($var == false)
    $cidade = 'São Paulo';
$idade = 28;

echo $idade;
echo '<br/>';
echo $cidade;
