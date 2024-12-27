<?php

// Durma o código por X segundos
// sleep(3);
// echo 'Um';
// sleep(3);
// echo 'Dois';
// sleep(3);
// echo 'Três';

$nome = 'Alan';

if ($nome == 'João') {
    // Continuamos o código
    echo 'Tudo certo!';
} else {
    die('O script parou de ser executado!');
}

sleep(3);
echo 'Um';
sleep(3);
echo 'Dois';
sleep(3);
echo 'Três';