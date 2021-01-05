<?php

$conn = mysqli_connect("localhost","root","","btbgymdb");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];
$sql ="SELECT trainee_id FROM `tbtrainee` WHERE trainee_name='".$username."' AND Trainee_password ='".$password."' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_num_rows($res);

if($row==1){
    header('location:page.php');
}
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
    <input type="text" id="" name="password">
    <input type="submit" name="login">
    </form>
</body>
</html>