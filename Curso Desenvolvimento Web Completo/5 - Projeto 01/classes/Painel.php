<?php
class Painel
{
    public static $positions = [
        '0' => 'Usuário',
        '1' => 'Moderador',
        '2' => 'Administrador'
    ];

    public static function logged()
    {
        return isset($_SESSION['login']) ? true : false;
    }

    public static function logout()
    {
        setcookie('remember', true, time() - 10, '/');
        setcookie('username', true, time() - 10, '/');
        setcookie('password', true, time() - 10, '/');
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
        $sql = MySql::connect()->exec("DELETE FROM `tb_admin.online` WHERE last_action < '$date' - INTERVAL 1 MINUTE");
    }

    public static function alert($type, $message, $description, $confirmButtonColor, $confirmButtonText, $allowOutsideClick, $allowEscapeKey, $redirecUrl)
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
                    text: "' . $description . '",';

        if (!empty($confirmButtonColor)) {
            echo 'confirmButtonColor: "' . $confirmButtonColor . '",';
        }

        if (!empty($confirmButtonText)) {
            echo 'confirmButtonText: "' . $confirmButtonText . '",';
        }

        if ($allowOutsideClick == false) {
            echo 'allowOutsideClick: false,';
        }

        if ($allowEscapeKey == false) {
            echo 'allowEscapeKey: false,';
        }

        echo '})';

        if (!empty($confirmButtonColor) && !empty($confirmButtonText)) {
            echo '.then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "' . $redirecUrl . '";
                }
            })';
        }

        echo '});
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
        $fileFormat = explode('.', $file['name']);
        $imageName = uniqid() . '.' . $fileFormat[count($fileFormat) - 1];

        if (move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL . '/uploads/' . $imageName)) {
            return $imageName;
        } else {
            return false;
        }
    }

    public static function deleteFile($file)
    {
        @unlink('uploads/' . $file);
    }

    public static function insert($arr)
    {
        $right = true;
        $name_table = $arr['name_table'];
        $query = "INSERT INTO `$name_table` VALUES (null";

        foreach ($arr as $key => $value) {
            if ($key == 'acao' || $key == 'name_table') {
                continue;
            }

            if ($value == '') {
                $right = false;
                break;
            }

            $query .= ", ?";
            $param[] = $value;
        }

        $query .= ")";

        if ($right == true) {
            $sql = MySql::connect()->prepare($query);
            $sql->execute($param);
        }

        return $right;
    }

    public static function selectAll($table, $start = null, $end = null)
    {
        if ($start == null && $end == null) {
            $sql = MySql::connect()->prepare("SELECT * FROM `$table`");
        } else {
            $sql = MySql::connect()->prepare("SELECT * FROM `$table` ORDER BY id DESC LIMIT $start, $end");
        }
        $sql->execute();

        return $sql->fetchAll();
    }

    public static function delete($table, $id = false)
    {
        if ($id == false) {
            $sql = MySql::connect()->prepare("DELETE FROM `$table`");
        } else {
            $sql = MySql::connect()->prepare("DELETE FROM `$table` WHERE id = $id");
        }

        $sql->execute();
    }

    public static function redirect($url)
    {
        echo '<script>location.href = "' . $url . '"</script>';

        die();
    }

    public static function select($table, $query, $arr)
    {
        $sql = MySql::connect()->prepare("SELECT * FROM `$table` WHERE $query");

        $sql->execute($arr);

        return $sql->fetch();
    }

    public static function update($arr)
    {
        $right = true;
        $first = false;
        $name_table = $arr['name_table'];
        $query = "UPDATE `$name_table` SET ";

        foreach ($arr as $key => $value) {
            if ($key == 'acao' || $key == 'name_table' || $key == 'id') {
                continue;
            }

            if ($value == '') {
                $right = false;
                break;
            }

            if ($first == false) {
                $first = true;
                $query .= "$key = ?";
            } else {
                $query .= ", $key = ?";
            }

            $param[] = $value;
        }

        if ($right == true) {
            $param[] = $arr['id'];
            $sql = MySql::connect()->prepare($query . ' WHERE id = ?');
            $sql->execute($param);
        }

        return $right;
    }
}
