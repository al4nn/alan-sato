<?php
include('Exemplo.class.php');

$exemplo = new Exemplo();
$exemplo->var2 = 'Alan';
echo $exemplo->var2;

echo '<hr>';

$exemplo2 = new Exemplo;
$exemplo2->var2 = 'João';
echo $exemplo2->var2;

echo '<hr>';

echo Exemplo::$var3;

echo '<hr>';

Exemplo::metodoEstatico();

echo '<hr>';

$exemplo->setVar1('Alan');
echo $exemplo->pegaVar1();

echo '<hr>';

$exemplo2->setVar1('João');
echo $exemplo2->pegaVar1();