<?php
class Pessoa
{
    private $nome = 'Alan';
    private $idade = 28;
    private $peso = '100kg';

    public function crescer()
    {
        echo 'Estou crescendo!';
        $this->comer();
    }

    private function comer()
    {
        echo 'Estou comendo!';
    }
}

$pessoa = new Pessoa;
$pessoa2 = new Pessoa;

$pessoa->crescer();
