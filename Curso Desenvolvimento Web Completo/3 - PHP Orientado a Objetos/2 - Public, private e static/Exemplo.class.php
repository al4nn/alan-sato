<?php

/**
 * Essa classe é de exemplo!
 */

// Public funciona em qualquer lugar!
// Private só conseguimos acessar dentro da classe!

class Exemplo
{
    private $var1;
    public $var2;
    public static $var3 = 'Estático';

    private function metodoPrivado() {}

    public function metodoPublico() {}

    public static function metodoEstatico()
    {
        echo 'Metodo Estático';
    }

    public function setVar1($var1)
    {
        $this->var1 = $var1;
    }

    public function pegaVar1()
    {
        return $this->var1;
    }
}
