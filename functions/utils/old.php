<?php 


function old(string $name, bool $isPost = false): mixed
{
    static $storage = [];
    if ($isPost) {
        if (!empty($_POST[$name])) {
            $storage[$name] = $_POST[$name];
        }
        return htmlspecialchars($storage[$name] ?? '');
    } else {
        return htmlspecialchars($storage[$name] ?? '');
    }
}
