<?php  
include 'connection.php';
session_start();
if(isset($_POST['login_button'])) {

    $email = $_POST['log_email']; //sanitize email

	$_SESSION['log_email'] = $email; //Store email into session variable 

    $password = $_POST['log_password']; //Get password

	$check_database_query = mysqli_query($conn,"SELECT trainer_id FROM `tbtrainer` WHERE trainer_email='".$email."' AND Trainer_password ='".$password."' ");

    $check_login_query = mysqli_num_rows($check_database_query);

    if($check_login_query == 1) {
        
        $query ="SELECT trainer_id FROM `tbtrainer` WHERE trainer_email='".$email."' AND Trainer_password ='".$password."'";
        $result=mysqli_query($conn,$query);
        
        if(mysqli_fetch_assoc($result)){
            $_SESSION['coachemail']=$email;
        }
        
        header("Location:trainerprofile.php");
        
        exit();
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
    <input type="text" id="" name="log_email">
    <input type="text" id="" name="log_password">
    <input type="submit" name="login_button">
    </form>
</body>
</html>