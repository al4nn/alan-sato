<?php
include('config.php');
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
Site::updateUserOnline();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projeto 01</title>
    <meta name="description" content="Descrição do meu site!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/main.min.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <base base="<?php echo INCLUDE_PATH; ?>" />

    <?php
    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
            break;

        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
    ?>

    <header class="bg-purple">
        <div class="container flex justify-between align-center">
            <div class="logo">
                <a class="fw-300 text-white no-decoration uppercase" href="<?php echo INCLUDE_PATH; ?>">
                    Logomarca
                </a>
            </div>
            <div class="menu flex">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <ul class="flex">
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="<?php echo INCLUDE_PATH; ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="<?php echo INCLUDE_PATH; ?>sobre">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="<?php echo INCLUDE_PATH; ?>servicos">
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a class="fw-300 text-white no-decoration uppercase" href="<?php echo INCLUDE_PATH; ?>contato" realtime="contato">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <?php
        if (file_exists('pages/' . $url . '.php')) {
            include('pages/' . $url . '.php');
        } else {
            if ($url != 'sobre' && $url != 'servicos') {
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }
        ?>
    </main>

    <footer>
        <div class="container text-white text-center">
            Todos os direitos reservados
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>assets/libs/jquery-3.7.1.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>assets/libs/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>assets/libs/sweetalert2.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/main.js"></script>
</body>

</html>