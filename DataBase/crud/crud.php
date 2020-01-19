<?php

interface myCRUD
{
    static function create($connection, $object);

    static function read($connection, $id);

    static function update($connection, $id, $data, $new_value);
}
