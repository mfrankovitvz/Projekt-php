<?php   
session_start();  
unset($_SESSION['user_sesije']);  
session_destroy();  
header("location:login.php");  
?> 