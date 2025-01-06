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

    public static function listOnlineUsers()
    {
        self::cleanUsersOnline();
        $sql = MySql::connect()->prepare("SELECT * FROM `tb_admin.online`");
        $sql->execute();

        return $sql->fetchAll();
    }

    public static function cleanUsersOnline()
    {
        $date = date('Y-m-d H:i:s');
        $sql = MySql::connect()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
    }

    public static function alert($type, $message, $description)
    {
        $icon = $type == 'success' ? 'success' : 'error';
        $title = $type == 'success' ? 'Usuário atualizado com sucesso!' : 'Erro ao atualizar, tente novamente!';
        if (!empty($message)) {
            $title = $message;
        }

        echo '<script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "' . $icon . '",
                    title: "' . $title . '",
                    text: "' . $description . '"
                });
            });
        </script>';
    }

    public static function validImage($image)
    {
        if ($image['type'] == 'image/jpg' || $image['type'] == 'image/jpeg' || $image['type'] == 'image/png') {
            $size = intval($image['size'] / 1024);

            if ($size < 300) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function uploadFile($file)
    {
        if (move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL . '/uploads/' . $file['name'])) {
            return $file['name'];
        } else {
            return false;
        }
    }

    public static function deleteFile($file) {
        @unlink('uploads/' . $file);
    }
}
