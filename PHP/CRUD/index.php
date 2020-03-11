<?php
    require_once "./models/UserModel.php";

    $userModel = new UserModel();

    $result = UserModel::getAllUsers();

    require_once "./views/users-list.php"
?>

