<?php

session_start();
if (isset($_SESSION['coachemail'])) {
	$CoachLoggedIn = $_SESSION['coachemail'];
    echo $_SESSION['coachemail']."hello";
}
else {
    header("Location:logincoach.php");
    ?> <script>alert('session is wrong')</script>
    
<?php


}

?>




<a href="logout.php">logout</a>