<?php
class User
{
    public function updateUser($name, $password, $image)
    {
        $sql = MySql::connect()->prepare("UPDATE `tb_admin.usuarios` SET name = ?, password = ?, image = ? WHERE username = ?");

        if ($sql->execute(array($name, $password, $image, $_SESSION['username']))) {
            return true;
        } else {
            return false;
        }
    }

    public static function userExists($username)
    {
        $sql = MySql::connect()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE username = ?");
        $sql->execute(array($username));

        if ($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function registerUser($username, $password, $image, $name, $position)
    {
        $sql = MySql::connect()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null, ?, ?, ?, ?, ?)");
        $sql = $sql->execute(array($username, $password, $image, $name, $position));
    }
}
