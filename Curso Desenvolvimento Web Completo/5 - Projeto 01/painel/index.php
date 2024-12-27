<?php
require_once('../config.php');

if (Painel::logged() == false) {
    require_once('login.php');
} else {
    require_once('painel.php');
}
