<?php

function report_app_error(): void
{
    error_reporting(E_ALL);
    ini_set('error_reporting', 1);

}