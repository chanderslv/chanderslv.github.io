<?php
session_start();
var_dump($_SESSION);
if ($_SESSION['user_id']) {
    header("Location: /chanderslv.github.io/w6l2");
}


if (isset($_POST['submit'])) {
    require_once "./CRUD/helpers/db-wrapper.php";

    $name = $_POST["name"];
    $response = DB::run("SELECT * FROM users2 WHERE name='$name'");
    $password;

    if (!$response->num_rows) {
        echo "User does not found";
    } else {
        while($row = mysqli_fetch_assoc($response)) {
            $password = $row['password'];
            $user_id = $row['id'];
        }
        $validPassword = password_verify($_POST['password'], $password);
    
        if ($validPassword) {
            $_SESSION['user_id'] = $user_id;
            header("Location: /chanderslv.github.io/w6l2");
        } else {
            echo "Invalid password";
        }
    }



}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="jquery-3.4.1.min.js"></script>
</head>

<body class="P-3">
    <div class="d-flex justify-content-center">
        <form action="/chanderslv.github.io/w6l2/login.php" method="post">
            <div class="form-group">  
                <Label>
                    Name 

                    <input class="form-control" name="name">
                </Label>
            </div>  
            <div class="form-group">  
                <Label>
                    Password

                    <input class="form-control" name="password" type="password">
                </Label>
            </div>  
            <button class="btn btn-primary" type="submit" name="submit">LOGIN</button>
        </form>
    </div>

</body>

</html>