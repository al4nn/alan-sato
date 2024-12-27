<?php
class MySql
{
    private static $pdo;

    public static function connect()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo '<p class="bg-red text-white text-center">Erro ao estabelecer conexão com o banco de dados!</p>';
            }
        }

        return self::$pdo;
    }
}
