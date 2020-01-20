<?php

include("Item.php");
include_once("crud.php");
include_once("connection_menager.php");

class itemCrud implements myCRUD
{
    public static function create($connection, $item)
    {

        return put_query_return_status($connection, "INSERT INTO items(NazwaI, Refund, Recepta, Rodzaj,Producent) VALUES ('" . $item->getNazwa()
            . "', '" . $item->getRefund() . "', '" . $item->getRecepta() . "', '" . $item->getRodzaj() . "', '". $item->getProducent() . "')");

    }

    public static function read($connection, $id)
    {
        $item_data = get_data($connection, "SELECT * FROM items WHERE ItemID='" . $id . "'");
        return self::return_item($item_data);
    }

    public static function read_all($connection)
    {
        $item_data = get_data($connection, "SELECT * FROM items");
        return self::return_items($item_data);
    }

    static function update($connection, $id, $data, $new_value)
    {
        $status = put_query_return_status($connection, "UPDATE items SET " . $data . "= '" . $new_value . "' WHERE ItemID=" . $id);
        return $status;
    }


    private static function return_item($item_data)
    {
        if (count($item_data) == 0) {
            return null;
        }
        $item = $item_data[0];
        return new Item($item["ItemID"], $item["NazwaI"], $item["Refund"], $item["Recepta"], $item["Rodzaj"],  $item["Producent"]);
    }

    private static function return_items($item_data)
    {
        $output = [];
        if (count($item_data) == 0) {
            return [];
        }
        for ($i = 0; $i < count($item_data); $i++) {
            $user = new Item($item_data[$i]["ItemID"], $item_data[$i]["NazwaI"], $item_data[$i]["Refund"], $item_data[$i]["Recepta"],  $item_data[$i]["Rodzaj"], $item_data[$i]["Producent"]);
            array_push($output, $user);
        }
        return $output;
    }
}