<?php

namespace App\Http\Controllers;

use App\Models\EmailClient;

class EmailController extends Controller
{

    public static function send(): void
    {
        if (request('post')) {
            $data = json_decode(file_get_contents('php://input'), true);


            $isSent = EmailClient::send(
                $data['fromName'],
                $data['to'],
                $data['toName'],
                $data['subject'],
                $data['message']
            );
            if ($isSent) {
                echo 'Email sent successfully';
            } else {
                echo 'Email not sent';
            }
        }

    }
}