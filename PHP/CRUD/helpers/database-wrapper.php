<?php

class DBW {
    private $connection;

    public function openConnection() {

        $dbhost = "mysql-server-80"; //pieslēgšanās mysql
        $dbuser = "root";
        $dbpass = "root_password";
        $dbname = "web-bootcamp-db"; //datubāzes nosaukums (iekš mysql)

        $this->connection = new mysqli ($dbhost, $dbuser, $dbpass, $dbname); 

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error); //punkts sasaista kopā tekstus kā +
        // } else {
        //     echo "Connection successful <br/>";
        }
    }

    public function closeConnection() {
        $this->connection->close();
    }

    public function run($sql) {
        $response = $this->connection->query($sql);

        if ($response) {
            return $response;
        } else {
            die("SQL error: " . $this->connection->error . "</br>");
        }
    }
}
?>