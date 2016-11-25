<?php
/**
 * Created by PhpStorm.
 * User: Maurizio
 * Date: 24/11/2016
 * Time: 23:01
 */

namespace DataBaseManager;


class DataBase
{
    public static $servername = "localhost";
    public static $username = "root";
    public static $password = "";
    private static $database = "yourteam";
    public static $connection = null;

    public static function getConnection()
    {
        if (DataBase::$connection == null) {
            // Create connection
            DataBase::$connection = new \mysqli(DataBase::$servername, DataBase::$username, DataBase::$password, DataBase::$database);
        }

        if (DataBase::$connection->connect_error) {
            die("Connection failed: " . DataBase::$connection->connect_error);
        }

        return DataBase::$connection;
    }
}