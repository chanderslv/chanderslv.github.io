<?php
    if (isset($_POST["submit"])){
        require_once "./helpers/database-wrapper.php";

        $db = new DBW();

        $db->openConnection();

        $name = $_POST["name"];
        $password = $_POST["password"];

        $db->run("INSERT INTO users3 (name, password) VALUES ('$name', '$password')");
    
        $db->closeConnection();

        header("Location: /chanderslv.github.io/PHP/CRUD");
    }

    // while($row = mysqli_fetch_assoc($response)) {
    //         echo "<tr><td>" . $row["name"] . "<";
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="jquery-3.4.1.min.js"></script>
    <script src="./scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    
</head>

<body class="p-3">
    <h1 class="title">
        ADD users
    </h1>
    <div class="d-flex justify-content-center">
        <form action="/chanderslv.github.io/PHP/CRUD/add.php" method="post">
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
            <button class="btn btn-primary" type="submit" name="submit">Save (PHP)</button>
            <button class="btn btn-primary js-save-date">Save (jQuery)</button>
        </form>
    </div>
</body>

</html>