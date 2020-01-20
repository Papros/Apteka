<?php

include_once("DataBase/user_service.php");
include_once("DataBase/base_util.php");


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
            <div class="menu-item" id="login-option">  <a> KONTO </a> </div>

        </div>

        <div id="login-form-container" class="nodisplay">

                <form id='login-form' action='DataBase/loginGate.php' method='POST' >
                    <label>
                        <input type='text' name='login' placeholder='Login'>
                    </label>

                    <label>
                        <input type='password' name='password' placeholder='Hasło'>
                    </label>
                    <button type='submit' name='zaloguj'>Zaloguj</button>
                    Nie masz konta? <a href='userData.php'> Zarejstruj się ! </a>
                </form>


        </div>

        <div class="error_msg">

        </div>

    </div>


    <form id="register_form" action="DataBase/registerGate.php" method="POST" autocomplete="on">

        <div class="label">
            <div class="name_tag">Imię</div>
            <label>
                <input class="r_input" type="text" name="first_name" value="" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Nazwisko</div>
            <label>
                <input class="r_input" type="text" name="last_name" value="" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Data urodzenia</div>
            <label>
                <input class="r_input" type="date" name="birthdate" value="" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Adres</div>
            <label>
                <input class="r_input" type="text" name="adress" value="" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Kod Pocztowy</div>
            <label>
                <input class="r_input" type="text" name="zipcode" value="" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Miasto</div>
            <label>
                <input class="r_input" type="text" name="city" value=""required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">E-mail</div>
            <label>
                <input class="r_input" type="email" name="email" value="" required/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Numer telefonu <sup><em style="font-size:0.7em">(Opcjonalne)</em></sup></div>
            <label>
                <input class="r_input" type="tel" name="phone" value="" required pattern="\d{9}"/>
            </label>
        </div>

        <div class="label">
            <div class="name_tag">Login</div>
            <label>
                <input class="r_input" type="text" name="login" value="" required/>
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
                Przeczytałem i akceptuję <a href="#"> regulamin </a>
            </label>
        </div>

        <div class="terms">
            <label> <input type="checkbox" name="condidions_2" required/> Wyrażam zgodę na przetwarzanie moich
                danych osobowych przez Administratora danych osobowych, którym jest Apteka Sp. Z o.o. z
                siedzibą we Poznaniu, ul.Śniadeckich 13, NIP: 000-00-00-000, REGON: 000000000. Dane osobowe zostały
                przeze mnie podane dobrowolnie i oświadczam, że są one zgodne z prawdą;
            </label>
        </div>

        <button type="submit" name="create">Utwórz Konto</button>

    </form>


    <div class="footer">
        <div class="footer_msg">
            Apteka - projekt realizowany na potrzebę przedmiotu Projektowanie Oprogramowania
        </div>
    </div>

</div>



</body>


</html>

