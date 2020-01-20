<?php

include_once("connection_menager.php");
include_once("itemCrud.php");
include_once("Item.php");
include_once("base_util.php");

function get_item_by_id($id)
{
    $connection = open_connection();
    $item = itemCrud::read($connection, $id);
    close_connection($connection);
    return $item;
}

function get_all_item()
{
    $connection = open_connection();
    $items = itemCrud::read_all($connection);
    close_connection($connection);
    return $items;
}

