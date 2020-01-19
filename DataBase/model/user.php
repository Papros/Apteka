<?php

class User
{
    private $id;
    private $first_name;
    private $last_name;
    private $birthdate;
    private $adress;
    private $zipcode;
    private $city;
    private $email;
    private $phone;
    private $login;
    private $password;

    public function __construct($id, $first_name, $last_name, $birthdate, $adress, $zipcode, $city, $email, $phone, $login,
                                $password)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birthdate = $birthdate;
        $this->email = $email;
        $this->phone = $phone;
        $this->login = $login;
        $this->password = $password;
        $this->adress = $adress;
        $this->zipcode = $zipcode;
        $this->city = $city;

    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_first_name()
    {
        return $this->first_name;
    }

    public function get_last_name()
    {
        return $this->last_name;
    }

    public function get_birthdate()
    {
        return $this->birthdate;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_phone()
    {
        return $this->phone;
    }

    public function get_login()
    {
        return $this->login;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function get_adress()
    {
        return $this->adress;
    }

    public function get_zipcode()
    {
        return $this->zipcode;
    }

    public function get_city()
    {
        return $this->city;
    }


}
