<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">

</head>

<body>
    <div class="bg">
        <div id="mala-wrapper" class="clos">
            <div class="poga-wrapper">
                <button class="opn-form">
                    <span></span>
                </button>
            </div>
            <div class="forma-wrapper">
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
                        <button type="submit" class="btn btn-primary m-1" onclick="sortTable()"
                            name="save">Save</button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>





        </table>

        <!-- <div class="popup-wrapper">
        <div class="popup-content">
            <div class='content'>
                <span>
                    Thank you for Subscribing!
                </span>
            </div>
            <button id="popup-btn">Close</button>
        </div>
    </div> -->
    </div>
</body>

</html>