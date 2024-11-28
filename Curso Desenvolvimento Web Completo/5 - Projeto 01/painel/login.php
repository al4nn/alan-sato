<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Painel de Controle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/main.min.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <section class="login">
        <div class="container flex justify-center align-center">
            <div class="box bg-purple">
                <form class="flex column align-end" method="post">
                    <h2 class="text-center text-white uppercase">Logomarca</h2>
                    <input type="text" name="user" placeholder="Usuário" id="" required />
                    <input type="password" name="password" placeholder="Senha" id="" required />
                    <input type="submit" name="acao" value="Entrar" />
                </form>
            </div>
        </div>
    </section>
</body>

</html>