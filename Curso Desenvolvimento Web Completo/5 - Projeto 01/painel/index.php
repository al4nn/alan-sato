<?php
include('../config.php');

if (Painel::logged() == false) {
    include('login.php');
} else {
    include('painel.php');
}
