<?php

include_once("../model/user.php");
include_once("../crud/crud.php");
include_once("../other/connection_menager.php");

class userCrud implements myCRUD
{
    public static function create($connection, $user)
    {

        return put_query_return_status($connection, "INSERT INTO Users(FirstName, LastName, Birthdate, Adress,Zipcode,City,
                  Email, Phone, Login, Password) VALUES ('" . $user->get_first_name()
            . "', '" . $user->get_last_name() . "', '" . $user->get_birthdate() . "', '" . $user->get_adress() . "', '". $user->get_zipcode() . "', '". $user->get_city() . "', '"
            . $user->get_email() . "', '" . $user->get_phone() . "', '"
            . $user->get_login() . "', '" . $user->get_password() . "')");

    }

    public static function read($connection, $id)
    {
        $user_data = get_data($connection, "SELECT * FROM Users WHERE UserID='" . $id . "'");
        return self::return_user($user_data);
    }

    public static function read_by_login($connection, $login)
    {
        $user_data = get_data($connection, "SELECT * FROM Users WHERE Login='" . $login . "'");
        return self::return_user($user_data);
    }

    public static function read_by_email($connection, $email)
    {
        $user_data = get_data($connection, "SELECT * FROM Users WHERE Email='" . $email . "'");
        return self::return_user($user_data);
    }

    public static function read_by_phone($connection, $phone)
    {
        $user_data = get_data($connection, "SELECT * FROM Users WHERE Phone='" . $phone . "'");
        return self::return_user($user_data);
    }

    public static function read_all($connection)
    {
        $user_data = get_data($connection, "SELECT * FROM Users");
        return self::return_users($user_data);
    }

    static function update($connection, $id, $data, $new_value)
    {
        $status = put_query_return_status($connection, "UPDATE Users SET " . $data . "= '" . $new_value . "' WHERE UserID=" . $id);
        return $status;
    }


    private static function return_user($user_data)
    {
        if (count($user_data) == 0) {
            return null;
        }
        $user = $user_data[0];
        return new User($user["UserID"], $user["FirstName"], $user["LastName"], $user["Birthdate"],  $user["Adress"],  $user["Zipcode"], $user["City"],
            $user["Email"], $user["Phone"], $user["Login"], $user["Password"]);
    }

    private static function return_users($user_data)
    {
        $output = [];
        if (count($user_data) == 0) {
            return [];
        }
        for ($i = 0; $i < count($user_data); $i++) {
            $user = new User($user_data[$i]["UserID"], $user_data[$i]["FirstName"], $user_data[$i]["LastName"], $user_data[$i]["Birthdate"],  $user_data[$i]["Adress"],  $user_data[$i]["Zipcode"], $user_data[$i]["City"],
                $user_data[$i]["Email"], $user_data[$i]["Phone"], $user_data[$i]["Login"], $user_data[$i]["Password"]);
            array_push($output, $user);
        }
        return $output;
    }
}
