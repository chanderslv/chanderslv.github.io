<?php

if (isset($_POST["submit"])){
    require_once "./models/UserModel.php";
    

    $data = [
        "name" => $_POST["name"],
        "password" => $_POST["password"],
    ];

    UserModel::addUser($data);
    
    header("Location: /chanderslv.github.io/PHP/CRUD");
}
require_once "./views/users.form.php";
?>
