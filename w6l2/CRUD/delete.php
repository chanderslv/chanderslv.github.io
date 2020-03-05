<?php
    require_once "./CRUD/helpers/db-wrapper.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    if ($id) {
        $db = new DB();
        $db->openConnection();

        $db->run("DELETE FROM users2 WHERE id=$id");
    }

    header("Location: /chanderslv.github.io/w6l2");
?>