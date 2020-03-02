<?php
require_once "./db-wrapper.php";

$db = new DB1 ();

$db->openConnection();

$response = $db->run("SELECT * FROM users");

while($row = mysqli_fetch_assoc($response)) {
    echo $row["name"] . "<br/>";
}



$db->closeConnection();
?>