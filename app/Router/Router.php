<?php

namespace App\Router;

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;

class Router
{

    public static function route(): void
    {
        $path = $_GET['q'] ?? '';
        $action = $_GET['action'] ?? '';

        switch ($path) {
            case '':
            case '/':

                HomeController::index();
                switch ($action) {
                    case 'store':
                        EmailController::send();
                        break;
                }
                break;



            default:

                break;
        }
    }
}

