<?php
require_once "./db-wrapper.php";

$name = $_POST["name"];
$emails = $_POST["emails"];

$form_emails = '';
$form_name = '';
$id = '';


if ($name && $emails) {
    $db = new DB1 ();

    $db->openConnection();

    $name = $_POST["name"];
    $emails = $_POST["emails"];

    $response = $db->run("INSERT INTO users (name, emails) VALUES ('$name', '$emails')");

    $db->closeConnection();
}

if ($_GET["id"]) {
    $id=$_GET["id"];
    $db = new DB1;
    $db->openConnection();

    $response = $db->run("SELECT * FROM users WHERE id=".$_GET["id"]);
    
    while($row = mysqli_fetch_assoc($response)) {
        $form_emails = $row["emails"];
        $form_name = $row["name"];
    }


    if (empty($_POST["id"])) {
        $db->run("INSERT INTO users (name, emails) VALUES ('$name', '$emails')");
    } else {
        $db->run("UPDATE users SET name='$name', emails='$emails' WHERE id=".$_POST["id"]);
    }
}
    
    // $db->closeConection();

?>

<form action="./add.php" method="post">
    <input name="name" value="<?php echo $form_name ?>">
    <input name="emails" type="email" value=<?= $form_emails ?>>
    <input hidden name="id" value=<?= $id ?>>

    <button type="submit">Save</button>
</form>