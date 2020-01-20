<?php

include_once("base_util.php");


    session_start();

    $_SESSION["log"] = false;
    $_COOKIE["login"] = "";
    $_SESSION = array();
    unset($_COOKIE["ID"]);
    unset($_SESSION["log"]);
    unset($_SESSION["user"]);

    session_destroy();

    redirect("/index.php?error=bye");
