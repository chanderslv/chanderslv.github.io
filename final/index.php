<?php

require_once("process.php"); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINAL PROJECT</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./js/scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- accepted messages -->
    <!-- <?php    
    if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message']; 
        unset($_SESSION['message']); 
        ?>
    </div>
    <?php endif ?> -->

    <div class="container d-flex flex-row">

        <?php 
        $mysqli = new mysqli('mysql-server-80', 'root', 'root_password', 'web-bootcamp-db') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM info") or die($mysqli->error);
    ?>

        <!-- input text form -->
        <div class="d-flex align-items-center p-3">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"
                        placeholder="Enter your product">
                </div>
                <div class="form-group">
                    <?php if ($update == true):
                    ?>
                    <button type="submit" class="btn btn-primary m-1" name="edit">Update</button>
                    <?php else: ?>
                    <button type="submit" class="btn btn-primary m-1" name="save">Save</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- table -->
        <div class="p-2 flex-grow-1 align-items-center">
            <table id="ordered" class="table table-secondary table-hover">
               <!-- get data from database -->
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td style="width:30%">
                        <input type="checkbox" id="<?= $row; ?>">
                    </td>
                    <td style="width:30%"><?= $row["name"] ?></td>
                    <td style="width:30%">
                        <a href="index.php?edit=<?= $row["id"]?>" class="btn btn-success">Edit</a>
                        <a href="process.php?delete=<?= $row["id"]?>" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>