<?php
session_start();

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
