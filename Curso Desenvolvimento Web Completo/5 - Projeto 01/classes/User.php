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
}
