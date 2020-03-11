<?php

require_once __DIR__ . "/../helpers/database-wrapper.php";

class ProductModel {
    
    public static function getAllProducts($limit = 25) {   
        return DB::run("SELECT name, id FROM info LIMIT " . $limit);
    }
    public static function addProduct($data) {
        $name = $data["name"];
        DB::run("INSERT INTO info (name) VALUES ('$name')");
    }
    public static function getProductById($id) {
        return DB::run("SELECT * FROM info WHERE id=$id");

    }
    public static function updateProduct($data) {
        $name = $data["name"];
        $password = $data["password"];
        $id = $data["id"];
        DB::run("UPDATE info SET name='$name', password='$password' WHERE id=$id");
    }
    public static function deleteProductById($id) {
        DB::run("DELETE FROM info WHERE id=$id");
    }
}




?>