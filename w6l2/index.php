<?php
    require_once "./CRUD/helpers/db-wrapper.php";

   
    $result = DB::run("SELECT name, password, id FROM users2 LIMIT 25");
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="jquery-3.4.1.min.js"></script>
    <script src="./scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="title">
            Users
        </h1>

        <div>
            <a <?= isset($_SESSION["user_id"]) ? '' : 'hiden' ?> href="/chanderslv.github.io/w6l2/login.php" class="btn btn-primary">
                Log In
            </a>

            <a <?= isset($_SESSION["user_id"]) ? '' : 'hiden' ?> href="/chanderslv.github.io/w6l2/logout.php" class="btn btn-primary">
                Log Out
            </a>

            <a href="/chanderslv.github.io/w6l2/CRUD/add.php" class="btn btn-primary">
                add user
            </a>
        </div>

    </div>

    <table class="table">
        <tr>
            <th>Name</th>
            <th>Password</th>
            <th></th>
        </tr>
<!--TODO create PHP dynamic list-->
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row["name"]?></td>
                <td><?= $row["password"]?></td>
                <td>
                    <!--TODO create delete.php logic-->
                    <a href="/chanderslv.github.io/w6l2/edit.php?id<?= $row["id"]?>" class="btn btn-primary">Edit</a>

                    <!--TODO create delete.php logic-->
                    <a href="/chanderslv.github.io/w6l2/delete.php?id<?= $row["id"]?>" class="btn btn-danger">Delete (PHP)</a>

                    <!--TODO create delete JQuery logic-->
                    <button class="btn btn-danger js-delete-row" data-id=<?= $row["id"]?>>Delete JQuery</button>
                </td>
            </tr>
        <?php } ?>
    </table>


</body>

</html>