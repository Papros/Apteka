<?php

include_once("DataBase/service/user_service.php");
include_once("DataBase/other/base_util.php");



$register = -1;

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
            <div class="menu-item">  <a href="news.php"> NOWOŚCI</a>  </div>
            <div class="menu-item">  <a href="#"> PROMOCJE</a>  </div>
            <div class="menu-item" id="login-option">  <a> <?php print($user->get_login()) ?>  </a> </div>

        </div>

        <div id="login-form-container" class="nodisplay">


            <div id='acc_menu'>
                <a href='userData.php' > KONTO </a>
                <a href='#'> ZAMOWIENIA </a>
                <a href='#'> ULUBIONE </a>
                <a href='#'> REKLAMACJE </a>
                <a href='index.php?error=bye'> WYLOGUJ </a>

            </div>


        </div>

        <div class="error_msg">

        </div>

    </div>


    <form id="register_form" action="DataBase/other/updateData.php" method="POST" autocomplete="on">

        <div class="label">
            <div class="name_tag">Imię</div>
            <label>
                <input class="r_input" type="text" name="first_name" value="<?php print($user->get_first_name()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Nazwisko</div>
            <label>
                <input class="r_input" type="text" name="last_name" value="<?php print($user->get_last_name()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Data urodzenia</div>
            <label>
                <input class="r_input" type="date" name="birthdate" value="<?php print($user->get_birthdate()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Adres</div>
            <label>
                <input class="r_input" type="text" name="adress" value="<?php print($user->get_adress()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Kod Pocztowy</div>
            <label>
                <input class="r_input" type="text" name="zipcode" value="<?php print($user->get_zipcode()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Miasto</div>
            <label>
                <input class="r_input" type="text" name="city" value="<?php print($user->get_city()); ?>"required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">E-mail</div>
            <label>
                <input class="r_input" type="email" name="email" value="<?php  print($user->get_email()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Numer telefonu <sup><em style="font-size:0.7em">(Opcjonalne)</em></sup></div>
            <label>
                <input class="r_input" type="tel" name="phone" value="<?php  print($user->get_phone()); ?>" required pattern="\d{9}"/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Login</div>
            <label>
                <input class="r_input" type="text" name="login" value="<?php  print($user->get_login()); ?>" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Hasło</div>
            <label>
                <input class="r_input" type="password" name="password"  required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Potwierdź hasło</div>
            <label>
                <input class="r_input" type="password" name="confirm_password" required/>
            </label>
        </div>

        <div class="terms">
            <label>
                <input type="checkbox" name="condidions" required/>
                Potwierdzam autentyczność podanych danych oraz oświadczam że przeczytałem i akceptuję regulamin <a href="#"> regulamin </a>
            </label>
        </div>


        <button type="submit" name="create">Zapisz zmiany</button>

    </form>

    <div class="footer">
        <div class="footer_msg">
            Apteka - projekt realizowany na potrzebę przedmiotu Projektowanie Oprogramowania
        </div>
    </div>

</div>

</body>


</html>

