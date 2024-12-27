<?php

echo '<h2>Factory Design Pattern</h2>';

// Factory Design Pattern

class Cachorro
{
    public function __construct()
    {
        echo 'Classe Cachorro!';
    }
}

class Gato
{
    public function __construct()
    {
        echo 'Classe Gato!';
    }
}

new Cachorro();

echo '<hr>';

new Gato();

echo '<hr>';

class Animal
{
    public static function build($nomeClasse)
    {
        if (class_exists($nomeClasse)) {
            return new $nomeClasse;
        } else {
            die('Ops! A classe não existe!');
        }
    }
}

Animal::build('cachorro');

echo '<hr>';

Animal::build('gato');

echo '<hr>';

// Animal::build('passaro');
// Mata o código após não encontrar a classe da linha acima

echo '<h2>Facade Design Pattern</h2>';

// Facade Design Pattern

// Adicionar/Fechar Carrinho - Carrinho
// Calcular Frete - Frete
// Fechar Pedido - Pedido

class Carrinho
{
    public function fecharCarrinho()
    {
        echo 'Carrinho fechado!';
        echo '<hr>';
    }
}

class Frete
{
    public function calcularFrete()
    {
        echo 'Frete calculado!';
        echo '<hr>';
    }
}

class Pedido
{
    public function fecharPedido()
    {
        echo 'Pedido fechado!';
        echo '<hr>';
    }
}

class Loja
{
    public function finalizarCompra()
    {
        $this->fecharCarrinho();
        $this->calcularFrete();
        $this->fecharPedido();
    }

    public function fecharCarrinho()
    {
        $carrinho = new Carrinho;
        $carrinho->fecharCarrinho();
    }

    public function calcularFrete()
    {
        $frete = new Frete;
        $frete->calcularFrete();
    }

    public function fecharPedido()
    {
        $pedido = new Pedido;
        $pedido->fecharPedido();
    }
}

$loja = new Loja();
$loja->finalizarCompra();
