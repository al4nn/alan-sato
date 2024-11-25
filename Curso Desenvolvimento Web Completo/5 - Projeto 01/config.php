<?php
$autoload = function ($class) {
    if ($class == 'Email') {
        include('vendor/autoload.php');
    }

    include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define("INCLUDE_PATH", "http://estudos.danki-code.projeto1.localhost/");
