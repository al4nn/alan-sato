<?php
$nome = 'Alan';

if ($nome == 'Alan') :
    echo 'Verdadeiro!';
endif;

echo '<hr>';

$i = 0;
while ($i < 10) :
    $i++;
    echo "Oi $i";
    echo '<hr>';
endwhile;

echo '<hr>';

$array = array();

foreach ($array as $key => $value) :

endforeach;

echo '<hr>';

for ($i = 1; $i <= 10; $i++) :
    echo $i;
    echo '<hr>';
endfor;
