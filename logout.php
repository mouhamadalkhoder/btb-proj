<?php
session_start();
unset($_SESSION['coachemail']);
unset($_SESSION['username']);
header('location:logincoach.php');
?>