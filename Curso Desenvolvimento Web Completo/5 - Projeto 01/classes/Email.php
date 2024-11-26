<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mailer;

    public function __construct($host, $username, $password, $name)
    {
        $this->mailer = new PHPMailer();

        $this->mailer->CharSet = 'UTF-8';

        $this->mailer->isSMTP();                                                // Set mailer to use SMTP
        $this->mailer->Host = $host;                                            // Specify main and backup SMTP servers
        $this->mailer->SMTPAuth = true;                                         // Enable SMTP authentication
        $this->mailer->Username = $username;                                    // SMTP username
        $this->mailer->Password = $password;                                    // SMTP password
        $this->mailer->SMTPSecure = 'tls';                                      // Enable TLS encryption, `ssl` also accepted
        $this->mailer->Port = 587;                                              // TCP port to connect to

        $this->mailer->setFrom($username, $name);

        $this->mailer->isHTML(true);                                            // Set email format to HTML
    }

    public function addAddress($email, $name)
    {
        $this->mailer->addAddress($email, $name);                               // Add a recipient
    }

    public function formatEmail($info)
    {
        $this->mailer->Subject = $info['subject'];
        $this->mailer->Body = $info['body'];
        $this->mailer->AltBody = strip_tags($info['body']);
    }

    public function sendEmail()
    {
        if ($this->mailer->send()) {
            return true;
        } else {
            return false;
        }
    }
}
