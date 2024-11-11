<?php
$arr = array('Alan', 'João', 'Felipe', 'Maria');

foreach ($arr as $key => $value) {
    echo $key;
    echo ' => ';
    echo $value;
    echo '<hr>';
}


$total = count($arr);

echo "TOTAL: $total <hr>";

for ($i = 0; $i < $total; $i++) {
    echo $arr[$i] . '<hr>';
}