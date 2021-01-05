<?php

$conn = mysqli_connect("localhost","root","","btbgymdb");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['signup'])){

$username = $_POST['username'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$DOB = $_POST['DOB'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql ="INSERT INTO `tbtrainee` (`trainee_id`, `trainee_name`, `trainee_last_name`, `Trainee_email`, `Trainee_password`, `trainee_DOB`, `Trainee_phone`, `Trainer_address`) VALUES (NULL,'".$username."','".$lname."','".$email."','".$password."','".$DOB."','".$phone."','".$address."')";
$res=mysqli_query($conn,$sql);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        
    <input type="text" id="" name="username">
    <input type="text" id="" name="lname">
    <input type="text" id="" name="email">
    <input type="text" id="" name="password">
    <input type="text" id="" name="DOB">
    <input type="text" id="" name="phone">
    <input type="text" id="" name="address">

    <input type="submit" name="signup">
    </form>
</body>
</html>