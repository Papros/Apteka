<?php

include_once("DataBase/base_util.php");

if( (isset($_SESSION["log"])) && ($_SESSION["log"] == true)  ){
   redirect("news.php");
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


        <div style="width: 30%; text-align: justify-all; margin: auto">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur malesuada purus, sed posuere turpis auctor in. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus ut ligula et enim eleifend ullamcorper. Donec porttitor ultrices neque. Morbi placerat, ipsum id dictum congue, nunc lorem commodo nisi, a lobortis purus dui quis dolor. Integer luctus lacus ac lectus euismod, in molestie sem rhoncus. Donec non pretium tellus. Nam eleifend eros elit, vel scelerisque neque efficitur at. Nam placerat, elit non pharetra congue, erat enim consectetur sapien, sed vulputate lacus diam euismod tortor. Fusce dapibus pretium risus, vel rhoncus quam euismod nec. Pellentesque a lacus pellentesque, pretium justo a, accumsan felis. Cras molestie ex felis. Integer lectus tortor, sodales convallis risus nec, fermentum ullamcorper neque. Donec facilisis suscipit metus eu fringilla. Nam congue turpis eget metus dignissim, eu aliquet est interdum.

        Fusce in mattis dui. Aliquam sed efficitur odio. Phasellus finibus posuere purus at luctus. Integer eu consequat mauris, ut venenatis velit. Proin aliquam pharetra justo, ac ultrices metus lacinia a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean volutpat vitae eros vel fermentum. Mauris vestibulum vestibulum egestas. Donec condimentum mauris enim, vitae condimentum lorem egestas vel. Curabitur dictum commodo semper. Aliquam erat volutpat. Donec a neque et odio tempus molestie in a lectus. Donec sapien leo, gravida ac nulla a, ornare maximus leo. Curabitur rutrum iaculis justo, sed maximus leo porttitor ac. Cras tincidunt efficitur turpis, eu scelerisque nulla luctus quis.

        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis ut est dapibus, placerat libero nec, mollis libero. Aliquam sed metus lacinia, placerat massa nec, molestie erat. Mauris dapibus risus gravida feugiat imperdiet. Aliquam luctus risus tortor, at finibus diam rhoncus porttitor. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi imperdiet elementum sapien.

        Curabitur vitae tortor congue eros consequat faucibus. Cras pharetra elit a erat sodales posuere. Nunc a libero sem. Pellentesque sit amet tortor scelerisque, mattis sem ut, egestas enim. Phasellus lectus ipsum, ornare in varius quis, eleifend nec leo. Mauris aliquam fringilla tellus, sed tristique sapien interdum ut. Nam gravida neque lectus, nec malesuada nunc rutrum at. Nullam maximus sem euismod odio tempor, varius facilisis sem commodo. Aenean auctor nunc eu sem pretium, quis bibendum erat lacinia. Etiam mattis dolor dapibus metus convallis viverra.

        Nunc id nunc quis odio commodo feugiat ac quis est. Morbi tristique lacus mi, sed interdum erat cursus non. Cras pellentesque et sem sit amet cursus. Proin sed ante sed tellus lobortis porttitor vitae nec ligula. Aliquam tempus tempus mi, id pulvinar orci facilisis ut. Nullam venenatis risus ac turpis elementum, imperdiet blandit ligula volutpat. Curabitur ut augue quis metus mollis dapibus. Etiam nec tortor sapien. Morbi dapibus magna vel augue cursus, nec placerat nisl commodo. Quisque ornare, leo vitae placerat sollicitudin, nunc tortor commodo lorem, convallis laoreet augue libero vel enim. Suspendisse sit amet porta ante, in dictum magna. Suspendisse magna lorem, tincidunt vulputate dapibus vestibulum, tincidunt in nisi. Donec erat odio, fringilla a cursus non, porttitor in nisi. Nulla vel purus ut diam mollis semper at eget est. Nulla facilisi. Cras eget commodo nulla.

         </div>


        <div class="footer">
            <div class="footer_msg">
                Apteka - projekt realizowany na potrzebę przedmiotu Projektowanie Oprogramowania
            </div>
        </div>

    </div>

</body>


</html>
