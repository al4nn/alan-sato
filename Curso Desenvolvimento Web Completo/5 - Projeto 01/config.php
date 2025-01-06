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

define('INCLUDE_PATH', 'http://projeto1.dankicode.localhost:8080/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');
define('BASE_DIR_PAINEL', __DIR__ . '/painel');

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

function selectedMenu($param, $existingClasses)
{
    $url = explode('/', $_GET['url'] ?? '')[0];

    $classes = trim($existingClasses);
    if ($url == $param) {
        $classes .= ' active';
    }

    echo 'class="' . trim($classes) . '"';
}

function checkPermissionMenu($permission)
{
    if ($_SESSION['position'] >= $permission) {
        return;
    } else {
        echo 'style="display: none;"';
    }
}

function checkPermissionPage($permission) {
    if ($_SESSION['position'] >= $permission) {
        return;
    } else {
        include('painel/pages/permissao-negada.php');
        die();
    }
}
