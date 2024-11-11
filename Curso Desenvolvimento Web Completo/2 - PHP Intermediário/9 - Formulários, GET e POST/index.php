<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php
    // METODO GET
    // if (isset($_GET['acao'])) {
    //     $nome = $_GET['nome'];
    //     $email = $_GET['email'];

    //     echo $nome;
    //     echo '<br/>';
    //     echo $email;
    // }

    // METODO POST
    // if (isset($_POST['acao'])) {
    //     $nome = $_POST['nome'];
    //     $email = $_POST['email'];

    //     echo $nome;
    //     echo '<br/>';
    //     echo $email;
    // }

    // if (isset($_POST['acao'])) {
    //     echo $_POST['numero1'] + $_POST['numero2'];
    // }

    // if (isset($_POST['acao'])) {
    //     echo $_POST['nome'];
    // }

    if (isset($_POST['acao'])) {
        foreach ($_POST['valor'] as $key => $value) {
            echo $key;
            echo ' => ';
            echo $value;
            echo '<hr>';
        }
    }
    ?>

    <!-- METODO GET -->
    <!-- <form>
        <input type="text" name="nome" />
        <input type="email" name="email" />
        <input type="submit" name="acao" value="Enviar" />
    </form> -->

    <!-- METODO POST -->
    <!-- <form method="post">
        <input type="text" name="nome" />
        <input type="email" name="email" />
        <input type="submit" name="acao" value="Enviar" />
    </form> -->

    <!-- <form method="post">
        <input type="text" name="numero1" />
        <input type="text" name="numero2" />
        <input type="submit" name="acao" value="Enviar" />
    </form> -->

    <!-- <form method="post">
        <select name="nome">
            <option value="Alan">Alan</option>
            <option value="João">João</option>
        </select>
        <input type="submit" name="acao" value="Enviar" />
    </form> -->

    <form method="post">
        <select name="nome">
            <option value="Alan">Alan</option>
            <option value="João">João</option>
        </select>
        <input type="checkbox" name="valor[]" value="10" />10
        <input type="checkbox" name="valor[]" value="20" />20
        <input type="checkbox" name="valor[]" value="30" />30
        <input type="checkbox" name="valor[]" value="40" />40
        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>

</html>