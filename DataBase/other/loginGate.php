<?php

include_once("../service/user_service.php");
include_once("../other/base_util.php");

if (isset($_POST["login"])) {

    $login = $_POST["login"];
    $password = $_POST["password"];

    $login_ok = check_login($login, $password);
    if (!$login_ok) {
        try {
            redirect("/index.php?error=wrong_credentials");
        } catch (Exception $e) {
            redirect("/index.php?error=unknown");
        }
    }
    save_login($login);
    redirect("/news.php");
}
