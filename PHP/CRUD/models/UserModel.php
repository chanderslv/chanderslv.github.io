<?php

require_once __DIR__ . "/../helpers/database-wrapper.php";

class UserModel {
    
    public static function getAllUsers($limit = 25) {   
        return DBW::run("SELECT name, password, id FROM users3 LIMIT " . $limit);
    }
    public static function addUser($data) {
        $name = $data["name"];
        $password = $data["password"];
        DBW::run("INSERT INTO users3 (name, password) VALUES ('$name', '$password')");
    }
    public static function getUserById($id) {
        return DBW::run("SELECT * FROM users3 WHERE id=$id");

    }
    public static function updateUser($data) {
        $name = $data["name"];
        $password = $data["password"];
        $id = $data["id"];
        DBW::run("UPDATE users3 SET name='$name', password='$password' WHERE id=$id");
    }
    public static function deleteUserById($id) {
        DBW::run("DELETE FROM users3 WHERE id=$id");
    }
}




?>