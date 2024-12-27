<?php

// array_merge
// Serve para unir dois ou mais arrays;
$arr1 = array('chave1' => 'valor1', 'chave2' => 'valor2');
$arr2 = array('chave3' => 'valor3', 'chave4' => 'valor4');
$arr3 = array('chave5' => 'valor5');

$resultado = array_merge($arr1, $arr2, $arr3);

print_r($resultado);

echo '<hr>';

// array_intersect_key
// Serve para retornar valores com a mesma chave em um ou mais arrays
$arr1 = array('chave1' => 'valor1', 'chave2' => 'valor2');
$arr2 = array('chave2' => 'valor6', 'chave1' => 'valor5', 'chave3' => 'valor3', 'chave4' => 'valor4');

print_r(array_intersect_key($arr1, $arr2));

echo '<hr>';

// array_map
// Serve para aplicar uma função em todos os valores do array
$arr = ['<p>Alan</p>', 'João', '<h1>Felipe</h1>'];

print_r(array_map('strip_tags', $arr));

echo '<hr>';
