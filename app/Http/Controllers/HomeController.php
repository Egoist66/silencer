<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public static function index(): void
    {

        echo view('layout->main.template', [
            'content' => view('components->chat.template'),
        ]);
    }

}