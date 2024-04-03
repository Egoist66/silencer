<?php

use App\Router\Router;

require_once __DIR__ . '/../bootstrap/bootstrap.php';
require_once __DIR__ . '/../vendor/autoload.php';


Router::route();

\App\Models\EmailClient::configure();