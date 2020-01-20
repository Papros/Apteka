<?php

function open_connection()
{
    $SQL_DATABASE_HOST = "localhost";
    $SQL_DATABASE_USER = "aptekauser";
    $SQL_DATABASE_PASSWORD = "pass";
    $SQL_DATABASE_NAME = "apteka";
    $EXCEPTION_CONNECTION_FAILED = "Connection failed: ";

    $connection = mysqli_connect($SQL_DATABASE_HOST, $SQL_DATABASE_USER, $SQL_DATABASE_PASSWORD, $SQL_DATABASE_NAME);
    if ($connection->connect_error) {
        die($EXCEPTION_CONNECTION_FAILED . mysqli_error($connection));
    }
    $connection->query('SET NAMES utf8');
    return $connection;
}

function get_data($connection, $sql)
{
    $result = $connection->query($sql);
    $output = array();
    while ($row = $result->fetch_assoc()) {
        array_push($output, $row);
    }
    return $output;
}

function put_query_return_status($connection, $sql)
{
    $result = mysqli_query($connection,$sql);
    return $result != False;
}

function close_connection($connection)
{
    mysqli_close($connection);
}


