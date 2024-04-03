<?php

namespace App\Models;

use AllowDynamicProperties;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



#[AllowDynamicProperties] final class EmailClient
{

    private PHPMailer|null $mail;
    private static EmailClient|null $instance = null;

    private function __construct()
    {

        $this->mail = new PHPMailer();
        $this->config = json_decode(file_get_contents('../config/email-config.json'), true);
    }

    public static function getInstance(): EmailClient
    {

        if (self::$instance === null) {
            self::$instance = new EmailClient();
        }
        return self::$instance;
    }

    public static function configure(): void
    {

        $config = self::getInstance()->config;
        $mail = self::getInstance()->mail;
        //Server settings
        $mail->SMTPDebug = $config['server']['debug'];                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = $config['server']['host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth = $config['server']['smtp_auth'];                                   //Enable SMTP authentication
        $mail->Username = $config['server']['username'];                     //SMTP username
        $mail->Password = $config['server']['password'];                                     //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port = $config['server']['port'];                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    }

    public static function send(string $fromName, string $to, string $toName, string $subject, string | array $message): bool
    {
        global $config;
        try {

            $mail = self::getInstance()->mail;
            $config = self::getInstance()->config;

            //Recipients
            $mail->setFrom($config['mail_from'], $fromName);
            $mail->addAddress($to, $toName);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = '';

            if($mail->send()){
                return true;
            }
            return false;

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }


}

EmailClient::configure();

