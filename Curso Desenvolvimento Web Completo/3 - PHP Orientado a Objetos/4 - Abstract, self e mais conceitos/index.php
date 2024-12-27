<?php
abstract class Teste
{
    public function func1()
    {
        echo 'Chamando função 1!';
    }

    abstract function func2();
}

class Principal2
{
    public static function outroMetodoEstatico()
    {
        echo 'Outro método estático!';
    }
}

class Principal extends Teste
{
    public function func2()
    {
        echo 'Estou declarando oficialmente um metodo abstrato!';
    }

    public static function metodoEstatico()
    {
        echo 'Método Estático';
    }

    public function funcao()
    {
        Principal::metodoEstatico();
        echo '<br/>';
        self::metodoEstatico();
        echo '<br/>';
        Principal2::outroMetodoEstatico();
    }
}

// new Teste; => Erro Fatal

$principal = new Principal;
$principal->func1();

echo '<hr>';

$principal->func2();

echo '<hr>';

Principal::metodoEstatico();

echo '<hr>';

$principal->funcao();

echo '<hr>';
