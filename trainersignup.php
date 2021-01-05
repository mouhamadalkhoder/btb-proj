<?php
include 'connection.php';

if(isset($_POST['signup'])){

$tr_username = $_POST['tr_username'];
$tr_lname = $_POST['tr_lname'];
$tr_email = $_POST['tr_email'];
$tr_password = $_POST['tr_password'];
$tr_DOB = $_POST['tr_DOB'];
$tr_phone = $_POST['tr_phone'];
$tr_address = $_POST['tr_address'];

$sql1 ="INSERT INTO `tbtrainer` (`trainer_id`, `trainer_name`, `trainer_last_name`, `Trainer_email`, `Trainer_password`, `trainer_DOB`, `Trainer_phone`, `Trainer_address`) VALUES (NULL,'".$tr_username."','".$tr_lname."','".$tr_email."','".$tr_password."','".$tr_DOB."','".$tr_phone."','".$tr_address."')";
$res1=mysqli_query($conn,$sql1);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coach signup</title>
</head>
<body>
    <form action="" method="post">
        
    <input type="text" id="" name="tr_username">
    <input type="text" id="" name="tr_lname">
    <input type="text" id="" name="tr_email">
    <input type="text" id="" name="tr_password">
    <input type="text" id="" name="tr_DOB">
    <input type="text" id="" name="tr_phone">
    <input type="text" id="" name="tr_address">

    <input type="submit" name="signup">
    </form>
</body>
</html>