<?php 

session_start();

// connect database
$mysqli = new mysqli('mysql-server-80', 'root', 'root_password', 'web-bootcamp-db') or die(mysqli_error($mysqli));


// button name='save' and send to database
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    
    $mysqli->query("INSERT INTO info (name) VALUES('$name')") or die($mysqli->error());

    $_SESSION['message'] = "Product has been SAVED!";
    $_SESSION['msg_type'] = "success";

    header("Location: /chanderslv.github.io/final");
}

// Delete from table and database
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM info WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Product has been DELETED!";
    $_SESSION['msg_type'] = "danger";

    header("Location: /chanderslv.github.io/final");
}

$update = false;
$name = '';
$id = '0';

if (isset($_GET["edit"])) {
    $id = $_GET["edit"];
    $update = true;

    $result = $mysqli->query("SELECT * FROM info WHERE id=$id");

    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $id = $row["id"];
    }
}

if (isset($_POST["id"])){
    
    $name = $_POST["name"];
    $id = $_POST["id"];
    

    $mysqli->query("UPDATE info SET name='$name' WHERE id=$id");

    $_SESSION['message'] = "Product UPDATE!";
    $_SESSION['msg_type'] = "success";


    header("Location: /chanderslv.github.io/final"); 

}
?>