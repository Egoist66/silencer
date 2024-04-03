<?php


function sanitize(string $data): string
{
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $data = strip_tags($data);
    return trim($data);
}
