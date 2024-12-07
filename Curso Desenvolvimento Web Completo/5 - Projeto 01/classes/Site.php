<?php
class Site
{
    public static function updateUserOnline()
    {
        if (isset($_SESSION['online'])) {
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $sql = MySql::connect()->prepare("UPDATE `tb_admin.online` SET ultima_acao = ? WHERE token = ?");
            $sql->execute(array($horarioAtual, $token));
        } else {
            $_SESSION['online'] = uniqid();
            $ip = $_SERVER['REMOTE_ADDR'];
            $horarioAtual = date('Y-m-d H:i:s');
            $token = $_SESSION['online'];
            $sql = MySql::connect()->prepare("INSERT INTO `tb_admin.online` VALUES (null, ?, ?, ?)");
            $sql->execute(array($ip, $horarioAtual, $token));
        }
    }
}
