<?php

include_once("user_service.php");
include_once("base_util.php");

if ($_POST["password"] != $_POST["confirm_password"]) {
    redirect("edit_data.php?id=" . $_POST["id"] . "&error=password_not_confirmed");
}

$user = new User(null, $_POST["first_name"], $_POST["last_name"], $_POST["birthdate"],$_POST["adress"],$_POST["Zipcode"],$_POST["city"], $_POST["email"],
    $_POST["phone"],null, $_POST["password"]);

update_user(POST["id"], $user);

redirect("/news.php?msg=saved");
