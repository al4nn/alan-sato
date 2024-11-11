<?php
$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet faucibus neque. Nullam finibus tincidunt purus, et venenatis nunc fermentum ac. Praesent vel commodo mi. Morbi tincidunt pharetra turpis. Etiam iaculis leo eget felis dignissim, viverra sodales augue tristique. Maecenas elementum nunc velit, et imperdiet nunc volutpat vitae. In hac habitasse platea dictumst. Phasellus pharetra eros a quam sodales, at ornare augue ornare. Donec ultricies sem neque, ut elementum quam placerat in. Praesent eu imperdiet odio. Donec volutpat turpis eu nunc vestibulum semper. Vestibulum fermentum commodo molestie. Sed commodo eleifend felis, a facilisis mi ultricies at. Vivamus urna enim, malesuada at aliquet ac, blandit fermentum enim. Proin bibendum vulputate ornare.';

// Serve para recortar uma string
echo substr($conteudo, 0, 20);

echo '<hr>';

// Serve para separar uma string a partir de um separador
// No caso o espaço
$nome = 'Alan Akira Sato Alves';

$nomes = explode(' ', $nome);
print_r($nomes);

echo '<hr>';

// Serve para juntar um array com um delimitador
// No caso o espaço
$nomes = implode(' ', $nomes);

echo $nomes;

echo '<hr>';

// Serve para tirar o código HMTL
$conteudo = '<h1>Alan</h1>';

echo $conteudo;

echo strip_tags($conteudo);

echo '<hr>';

echo htmlentities('<div></div>');