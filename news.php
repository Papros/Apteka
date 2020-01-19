<?php

include_once("DataBase/service/user_service.php");
include_once("DataBase/other/base_util.php");


session_start();
if(!isset($_SESSION["log"])){
    redirect("/index.php?error=loginneed");
}else{
    $login = $_SESSION["user"];
}


$user = get_user_by_login($login);
?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Apteka</title>
    <meta name="description" content="Apteka">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="Scrpits/stickyMenu.js" defer></script>
    <script type="text/javascript" src="Scrpits/hoverOver.js" defer></script>
</head>

<body>

<div class="container">

    <div id="logo">
        <img id="logoimg" src="Res/logo.png" alt="LOGO">
    </div>

    <div id="stick_header" >

        <div class="menu">

            <div class="menu-item">  <a href="#"> KATALOG</a>  </div>
            <div class="menu-item">  <a href="#"> NOWOŚCI</a>  </div>
            <div class="menu-item">  <a href="#"> PROMOCJE</a>  </div>
            <div class="menu-item" id="login-option">  <a> <?php print($user->get_login()) ?>  </a> </div>

        </div>

        <div id="login-form-container" class="nodisplay">

            <div id="acc_menu">
                <a href="userData.php" > KONTO </a>
                <a href="#"> ZAMOWIENIA </a>
                <a href="#"> ULUBIONE </a>
                <a href="#"> REKLAMACJE </a>
                <a href="DataBase/other/logoutGate.php"> WYLOGUJ </a>

            </div>

        </div>

        <div class="error_msg">

        </div>

    </div>


    <div style="width: 30%; text-align: justify-all; margin: auto">

    </div>


    <div class="footer">
        <div class="footer_msg">
            Apteka - projekt realizowany na potrzebę przedmiotu Projektowanie Oprogramowania
        </div>
    </div>

</div>

</body>


</html>
