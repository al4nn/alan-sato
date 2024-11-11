<?php
// final class Filha
// {
//     public function mostrarOla()
//     {
//         echo 'Olá Mundo!';
//     }
// }

class Filha
{
    protected function funcaoTeste()
    {
        echo 'Chamando função teste!';
    }

    private function funcaoTestePrivada()
    {
        echo 'Chamando função teste privada!';
    }

    public function mostrarOla()
    {
        echo 'Olá Mundo!';
        echo '<br/>';
        $this->funcaoTestePrivada();
    }
}

class Pai extends Filha
{
    public function mostrarOla()
    {
        echo 'Nova Função!';
        parent::mostrarOla();
    }

    public function mostrarTchau()
    {
        echo 'Tchau!';
        echo '<br/>';
        $this->funcaoTeste();
        // echo '<br/>';
        // $this->funcaoTestePrivada();
    }
}

$pai = new Pai;
$pai->mostrarTchau();

echo '<hr>';

$filha = new Filha();
$filha->mostrarOla();

echo '<hr>';

$pai = new Pai();
$pai->mostrarOla();
