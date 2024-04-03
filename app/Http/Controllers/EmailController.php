<?php

namespace App\Http\Controllers;

use App\Models\EmailClient;

class EmailController extends Controller
{

    public static function send(): void
    {
        if (request('post')) {
            $data = json_decode(file_get_contents('php://input'), true);
            $coded = convertAlphabetToUTF16($data['message']);

            $isSent = EmailClient::send(
                $data['fromName'],
                $data['to'],
                $data['toName'],
                $data['subject'],
                $coded
            );
            if ($isSent) {
                echo 'Email sent successfully';
            } else {
                echo 'Email not sent';
            }
        }

    }
}