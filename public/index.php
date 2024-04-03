<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use App\Router\Router;

require_once __DIR__ . '/../bootstrap/bootstrap.php';
require_once __DIR__ . '/../vendor/autoload.php';

Router::route();



\App\Models\EmailClient::configure();

