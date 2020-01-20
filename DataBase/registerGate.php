<?php

include_once("base_util.php");
include_once("user_service.php");


    $result = check_data_and_return_result();
    if ($result instanceof User) {
        if (add_user_result_status($result)) {
            $user = get_user_by_login($_POST["login"]);
            $status = "registration_success";
        } else {
            $status = "registration_failed";
        }
        redirect("/index.php?error=" . $status);
    } else {
        redirect("/userData.php?error=" . $result);
    }

    function check_data_and_return_result()
    {
        $first_name = $_POST["first_name"];
        if ($first_name == null) {
            return "first_name_null";
        }
        $last_name = $_POST["last_name"];
        if ($last_name == null) {
            return "last_name_null";
        }
        $birthdate = $_POST["birthdate"];
        if ($birthdate == null) {
            return "birthdate_null";
        }

        $adress = $_POST["adress"];
        if ($adress == null) {
            $adress = "";
        }

        $zipcode = $_POST["zipcode"];
        if ($zipcode == null) {
            $zipcode = "";
        }

        $city = $_POST["city"];
        if ($city == null) {
            $city = "";
        }

        $email = $_POST["email"];
        if ($email == null) {
            return "email_null";
        }
        $phone = $_POST["phone"];
        if ($phone == null) {
            $phone = "";
        }
        $login = $_POST["login"];
        if ($login == null) {
            return "login_null";
        }
        $password = $_POST["password"];
        if ($password == null) {
            return "password_null";
        }
        $confirm_password = $_POST["confirm_password"];
        if ($confirm_password == null) {
            return "confirm_password_null";
        }
        if ($confirm_password != $password) {
            return "password_not_confirmed";
        }

        $status = check_registration($login, $email, $phone);
        switch ($status) {
            case "login":
                return "login_taken";
            case "email":
                return "email_taken";
            case "phone":
                return "phone_taken";
        }

        try {
            return new User(null, $first_name, $last_name, $birthdate, $adress, $zipcode, $city, $email, $phone, $login, $password);
        } catch (Exception $e) {
            return "unknown";
        }

}
