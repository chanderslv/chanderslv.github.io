<?php

class DBW {
    private static $connection;

    private static function openConnection() {

        $dbhost = "mysql-server-80"; //pieslēgšanās mysql
        $dbuser = "root";
        $dbpass = "root_password";
        $dbname = "web-bootcamp-db"; //datubāzes nosaukums (iekš mysql)

        static::$connection = new mysqli ($dbhost, $dbuser, $dbpass, $dbname); 

        if (static::$connection->connect_error) {
            die("Connection failed: " . static::$connection->connect_error); //punkts sasaista kopā tekstus kā +
        // } else {
        //     echo "Connection successful <br/>";
        }
    }

    private static function closeConnection() {
        static::$connection->close();
    }

    public static function run($sql) {

        if(!static::$connection) {
            static::openConnection();
        }
        $response = static::$connection->query($sql);

        if ($response) {
            return $response;
        } else {
            die("SQL error: " . static::$connection->error . "</br>");
        }
    }
}
?>