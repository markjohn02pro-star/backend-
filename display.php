<?php

include "./config.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>FULLNAME: <?php echo $fullname ?></p>
    <p>EMAIL: <?php echo $email ?></p>
    <p>PHONE: <?php echo $phone ?></p>
    <p>MESSAGE: <?php echo $message ?></p>
</body>
</html>