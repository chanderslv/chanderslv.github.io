<?php
    require_once "./CRUD/helpers/db-wrapper.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    if ($id) {
        $db = new DB();
        $db->openConnection();

        $db->run("DELETE FROM users WHERE id=$id");
    }

    header("Location: /chanderslv.github.io/w5l4");
?>