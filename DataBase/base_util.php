<?php

function redirect($page)
{
    die('<script>window.location.href="' . $page . '";</script>');
}

function save_login($login)
{
    session_start();
    $_SESSION["user"] = $login;
    $_SESSION["log"] = true;
    setcookie("ID", session_id(), time() + (9000), "/");
    setcookie("login", $login, time() + (9000), "/");
}

function delete_login(){
    $_SESSION["log"] = false;
    $_COOKIE["login"] = "";
    unset($_COOKIE["ID"]);
    unset($_SESSION["log"]);
    unset($_SESSION["user"]);

    session_destroy();

}

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>window.prompt('Debug Objects: " . $output . "' );</script>";
}

function load_login()
{
    return $_COOKIE["login"];
}
