<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <script src="jquery-3.4.1.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex justify-content-between align-items-center p-5">
        <form action="/chanderslv.github.io/task2/add.php" method="post">
            <div class="form-group">
                <label for="comment"></label>
                <input class="form-control" name="name">
                <button class="btn btn-primary m-1" type="submit" name="submit">SAVE</button>
            </div>
            <table class="table">
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>