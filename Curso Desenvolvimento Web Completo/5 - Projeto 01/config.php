<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');

require_once realpath(__DIR__ . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$autoload = function ($class) {
    if ($class == 'Email') {
        include('vendor/autoload.php');
    }

    include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://estudos.danki-code.projeto1.localhost/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');

// Dados do banco de dados
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

define('NOME_EMPRESA', 'Alan Sato Dev.');

function positionPick($position)
{
    $arr = [
        '0' => 'Normal',
        '1' => 'Moderador',
        '2' => 'Administrador'
    ];

    return $arr[$position] ?? 'Desconhecido';
}
