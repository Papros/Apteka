<?php

include_once("DataBase/user_service.php");
include_once("DataBase/item_service.php");
include_once("DataBase/base_util.php");


session_start();
if(isset($_SESSION["log"])){
    $login = $_SESSION["user"];
    $user = get_user_by_login($login);
}



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
    <link rel="stylesheet" href="catalogStyle.css">
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
            <div class="menu-item">  <a href="index.php"> NOWOŚCI</a>  </div>
            <div class="menu-item">  <a href="#"> PROMOCJE</a>  </div>
            <div class="menu-item" id="login-option">  <a>ZALOGUJ </a> </div>

        </div>

        <div id="login-form-container" class="nodisplay">

            <form id="login-form" action="DataBase/loginGate.php" method="POST" >
                <label>
                    <input type="text" name="login" placeholder="Login">
                </label>

                <label>
                    <input type="password" name="password" placeholder="Hasło">
                </label>
                <button type="submit" name="zaloguj">Zaloguj</button>
                Nie masz konta? <a href="Register.php"> Zarejstruj się ! </a>
            </form>

        </div>

        <div class="error_msg">

            <?php

            if (isset($_GET['error'])) {
                switch ($_GET["error"]) {
                    case "wrong_credentials":
                        print("Twój login i/lub hasło nie były poprawne. Proszę spróbować ponownie");
                        break;
                    case "registration_success":
                        print("<div style='color: green'> Rejestracja przebiegła pomyślnie! </div>");
                        break;
                    case "registration_failed":
                        print("Wystąpił problem z rejestracją. Skontaktuj się z administracją serwisu.");
                        break;
                    case "unknown":
                        print("Ups, coś poszło nie tak :( ");
                        break;
                    case "loginneed":
                        print(" Żeby zobaczyć tę stronę musisz być zalogowany ");
                        break;
                    case "bye":
                        print("Wylogowano pomyślnie!");
                        break;
                }
            }

            ?>

        </div>

    </div>
    <div class="main_container">

        <div class="side_menu">

            <a class="side_menu_item">

            </a>

        </div>

        <div class="item_container">

            <?php
            $inR = 3;
            $items = get_all_item();
            for($i=0; $i <= count($items); $i=$i+$inR){
                $item_row = array_slice($items,$i,$i+$inR);

                print ('<div class="item_row">');

                for($j=0;$j < $inR; $j++){
                    if($j < count($item_row)) {
                        $item = get_item_by_id($item_row[$j]->getId());
                        print('<div id= "' . $item->getId() . '" class="item_element">
                            <a class="item_link" href="itemView.php?id=' . $item->getId() . '"/>
                                <img class="item_photo" src="Res/medicine.png" />
                                <div class="item_data_name" >' . $item->getNazwa() . '</div> 
                                <div class="item_data_cost" >' . "24.99 zł" . ' </div> 
                            </a>
                            <div class="buttom_item_container">
                                <button class="item_button"> - </button>
                                <div class="item_button">0</div>
                                <button class="item_button"> + </button>
                                <button class="item_button"> add </button>
                                </div>
                            </div>'
                        );
                    }else{
                        print('<div id= "" class="item_element_null"></div>' );
                    }
                }

                print("</div>");

            }

            ?>

        </div>

    </div>

    <div class="footer">
        <div class="footer_msg">
            Apteka - projekt realizowany na potrzebę przedmiotu Projektowanie Oprogramowania
        </div>
    </div>

</div>

</body>


</html>
