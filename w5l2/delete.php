<?php
    require_once "./db-wrapper.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    if ($id) {
        $db = new DB1();
        $db->openConnection();

        $db->run("DELETE FROM users WHERE id=$id");
    }

    header("location:/chanderslv.github.io/w5l2/add.php")
?>