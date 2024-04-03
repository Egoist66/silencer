<?php

function convertAlphabetToUTF16($text): string
{
    $result = '';
    for ($i = 0, $iMax = mb_strlen($text); $i < $iMax; $i++) {
        $char = mb_substr($text, $i, 1);
        $charCode = mb_convert_encoding($char, 'UTF-16', 'UTF-8');
        $charCode = bin2hex($charCode);
        $result .= $charCode;
    }
    return $result;
}