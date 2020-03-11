<?php
if (isset($_POST["submit"])){
    require_once "./models/ProductModel.php";
    
    $data = [
        "name" => $_POST["name"],
    ];
    
    ProductModel::addProduct($data);

    
    header("Location: /chanderslv.github.io/task2");
}
require_once "./views/head.php"
?>


