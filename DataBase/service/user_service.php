<?php


include_once("../crud/userCrud.php");
include_once("../model/user.php");
include_once("../other/base_util.php");

function check_login($login, $password)
{
    $connection = open_connection();
    $user = userCrud::read_by_login($connection, $login);
    close_connection($connection);
    if ($user == null) {
        return False;
    }
    return $user->get_password() == $password;
}

function check_registration($login, $email, $phone)
{
    $connection = open_connection();
    $user = userCrud::read_by_login($connection, $login);
    if ($user != null) {
        close_connection($connection);
        return "login";
    }
    $user = userCrud::read_by_email($connection, $email);
    if ($user != null) {
        close_connection($connection);
        return "email";
    }
    $user = userCrud::read_by_phone($connection, $phone);
    if ($user != null) {
        close_connection($connection);
        return "phone";
    }
    close_connection($connection);
    return "ok";
}

function get_user_by_id($id)
{
    $connection = open_connection();
    $user = userCrud::read($connection, $id);
    close_connection($connection);
    return $user;
}

function get_all_users()
{
    $connection = open_connection();
    $users = userCrud::read_all($connection);
    close_connection($connection);
    return $users;
}

function get_user_by_login($login)
{
    $connection = open_connection();
    $user = userCrud::read_by_login($connection, $login);
    close_connection($connection);
    return $user;
}

function add_user_result_status($user)
{
    $connection = open_connection();
    $result = userCrud::create($connection, $user);
    close_connection($connection);
    return $result;
}

function update_user($user_id, $new_user)
{
    $connection = open_connection();
    userCrud::update($connection, $user_id, "FirstName", $new_user->get_first_name());
    userCrud::update($connection, $user_id, "LastName", $new_user->get_last_name());
    userCrud::update($connection, $user_id, "Birthdate", $new_user->get_birthdate());
    userCrud::update($connection, $user_id, "Adress", $new_user->get_adress());
    userCrud::update($connection, $user_id, "Zipcode", $new_user->get_zipcode());
    userCrud::update($connection, $user_id, "City", $new_user->get_city());
    userCrud::update($connection, $user_id, "Email", $new_user->get_email());
    userCrud::update($connection, $user_id, "Phone", $new_user->get_phone());
    userCrud::update($connection, $user_id, "Password", $new_user->get_password());
}

