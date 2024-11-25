<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mailer;

    public function __construct($host, $username, $password, $nome)
    {
        require 'vendor/autoload.php';

        $this->mailer = new PHPMailer(true);

        //$mail->SMTPDebug = 3;                                         // Enable verbose debug output
        $this->mailer->isSMTP();                                                // Set mailer to use SMTP
        $this->mailer->Host = $host;                                            // Specify main and backup SMTP servers
        $this->mailer->SMTPAuth = true;                                         // Enable SMTP authentication
        $this->mailer->Username = $username;                                    // SMTP username
        $this->mailer->Password = $password;                                    // SMTP password
        $this->mailer->SMTPSecure = 'tls';                                      // Enable TLS encryption, `ssl` also accepted
        $this->mailer->Port = 587;                                              // TCP port to connect to

        $mail->setFrom($username, $nome);

        $mail->isHTML(true);                                            // Set email format to HTML
    }

    public function addAddress($email, $nome)
    {
        $this->mailer->addAddress($email, $nome);                   // Add a recipient
    }

    public function formatEmail($info)
    {
        $mail->Subject = $info['assunto'];
        $mail->Body = $info['body'];
        $mail->AltBody = strip_tags($info['body']);
    }

    public function sendEmail()
    {
        if ($this->mailer->sendMail()) {
            return true;
        } else {
            return false;
        }
    }
}
