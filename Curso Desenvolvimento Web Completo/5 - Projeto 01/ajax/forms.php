<?php
require_once('../config.php');

$data = array();

$subject = '';

if ($_POST['formulario'] == 'Formulário do Banner') {
    $subject = 'Novo e-mail cadastrado no site!';
} else {
    $subject = 'Nova mensagem do site!';
}

$body = '';

foreach ($_POST as $key => $value) {
    $body .= ucfirst($key) . ': ' . $value . '<br/>';
}

$info = array(
    'subject' => $subject,
    'body' => $body
);

$mail = new Email($_ENV['SMTP_HOST'], $_ENV['SMTP_USERNAME'], $_ENV['SMTP_PASSWORD'], 'Alan Sato');
$mail->addAddress('alan.sato96@outlook.com', 'Teste');
$mail->formatEmail($info);

if ($mail->sendEmail()) {
    $data['sucesso'] = true;
} else {
    $data['error'] = true;
}

die(json_encode($data));
