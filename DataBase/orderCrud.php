<?php

include_once("order.php");
include_once("crud.php");
include_once("connection_menager.php");

class orderCrud implements myCRUD
{
    public static function create($connection, $order)
    {

        return put_query_return_status($connection, "INSERT INTO Orders(FirstName, LastName, Birthdate, Adress,Zipcode,City,
                  Email, Phone, Login, Password) VALUES ('" . $order->get_first_name()
            . "', '" . $order->get_last_name() . "', '" . $order->get_birthdate() . "', '" . $order->get_adress() . "', '". $order->get_zipcode() . "', '". $order->get_city() . "', '"
            . $order->get_email() . "', '" . $order->get_phone() . "', '"
            . $order->get_login() . "', '" . $order->get_password() . "')");

    }


    static function read($connection, $id)
    {
        // TODO: Implement read() method.
    }

    static function update($connection, $id, $data, $new_value)
    {
        // TODO: Implement update() method.
    }
}