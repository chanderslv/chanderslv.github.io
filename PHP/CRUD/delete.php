<?php
    require_once "./helpers/database-wrapper.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    if ($id) {
        $db = new DBW();
        $db->openConnection();

        $db->run("DELETE FROM users3 WHERE id=$id");
    
        $db->closeConnection();
    }

    header("Location: /chanderslv.github.io/PHP/CRUD");
?>

<!-- <?php
    // if (isset($_GET["id"])) {
    //     require_once "./helpers/database-wrapper.php";
        
    //     $id = $_GET["id"];
    //     $db = new DBW();
    //     $db->openConnection();

    //     $db->run("DELETE FROM users3 WHERE id=$id");

    //     // $db->closeConnection();
    // }

    // header("Location: /chanderslv.github.io/PHP/CRUD");
?> -->