<?php


/**
 * This function sets session value
 * @param mixed $key
 * @param mixed $value
 * @return void
 */
function sessionSet(string $key, mixed $value): void
{
    $_SESSION[$key] = $value;
}

/**
 * This function gets session value
 * @param string $key
 * @return mixed
 */
function session(string $key): mixed
{
    return $_SESSION[$key] ?? null;
}

/**
 * This function checks if session key exists
 * @param string $key
 * @return bool
 */
function sessionHas(string $key): bool
{
    return isset($_SESSION[$key]);
}

/**
 * This function removes session value
 * @param string $key
 * @return void
 */
function sessionRemove(string $key): void
{
    unset($_SESSION[$key]);
   
}

/**
 * This function clears whole session
 * @return void
 */
function sessionClear(): void
{
    $_SESSION = [];
    session_unset();
    session_destroy();
}

/**
 * This function regenerates session id
 * @return void
 */
function sessionRegenerate(): void
{
    session_regenerate_id(true);
}
