<?php
class Painel
{
    public static function logged()
    {
        return isset($_SESSION['login']) ? true : false;
    }

    public static function logout()
    {
        session_destroy();
        header('Location: ' . INCLUDE_PATH_PAINEL);
        exit();
    }

    public static function loadPage()
    {
        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);

            if (file_exists('pages/' . $url[0] . '.php')) {
                include('pages/' . $url[0] . '.php');
            } else {
                include('pages/error.php');
            }
        } else {
            include('pages/home.php');
        }
    }
}
