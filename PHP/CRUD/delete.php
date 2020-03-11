<?php
    if (isset($_GET["id"])) {
        require_once "./models/UserModel.php";
        UserModel::deleteUserById($_GET['id']);  
    }
    if (isset($_GET["redirect"])&& $_GET["redirect"]) {
        return;
    }

    header("Location: /chanderslv.github.io/PHP/CRUD");
?>