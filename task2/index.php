<?php
    require_once "./models/ProductModel.php";

    $ProductModel = new ProductModel();

    $result = ProductModel::getAllProducts();

    require_once "./views/head-index.php"
   
?>


