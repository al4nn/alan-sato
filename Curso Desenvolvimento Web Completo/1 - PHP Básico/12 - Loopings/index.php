<?php

// Laço de repetição "FOR"

echo '<b>FOR</b> <br/> de 0 até 9 <br/><br/>';

for ($i = 0; $i < 10; $i++) {
    echo 'Olá Mundo! ' . $i . '<br/>';
    echo '<hr>';
}

echo '<br/><br/>de 10 até 1 <br/><br/>';

for ($i = 10; $i > 0; $i--) {
    echo 'Olá Mundo! ' . $i . '<br/>';
    echo '<hr>';
}

echo '<br/><br/><b>WHILE</b> <br/> de 0 até 9 <br/><br/>';

// Laço de repetição "WHILE"
$i = 0;
while ($i < 10) {
    echo 'Olá Mundo! ' . $i;
    echo '<hr>';
    $i++;
};

echo '<br/><br/> de 10 até 1 <br/><br/>';

$i = 10;
while ($i > 0) {
    echo 'Olá Mundo! ' . $i;
    echo '<hr>';
    $i--;
};

echo '<br/><br/><b>DO</b><br/>de 0 até 9<br/><br/>';

// Laço de repetição "DO"

$i = 0;

do {
    echo 'Olá Mundo! ' . $i;
    echo '<hr>';
    $i++;
} while ($i < 10);

$i = 10;

echo '<br/><br/> de 10 até 1 <br/><br/>';

do {
    echo 'Olá Mundo! ' . $i;
    echo '<hr>';
    $i--;
} while ($i > 0);
