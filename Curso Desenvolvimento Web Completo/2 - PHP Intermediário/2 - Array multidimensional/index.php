<?php
// Arrays sinlge
$arr = ['Alan', 'João'];
$arr = array('Alan', 'chave2' => 'João');

$arr[0] = 'Alan';
$arr[] = 'João';

// Arrays multidimensionais

$arr2 = array(array('Alan', 'João'), array(28, 16));

echo $arr2[0][0] . '<hr>';
echo $arr2[0][1] . '<hr>';
echo $arr2[1][0] . '<hr>';
echo $arr2[1][1] . '<hr>';

$arr2[0] = array('chave1' => 'Alan', 'João');

echo $arr2[0]['chave1'] . '<hr>';

$arr2[0]['chave1'] = 'Alan';

echo $arr2[0]['chave1'];
