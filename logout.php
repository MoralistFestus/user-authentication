<?php
// start session
	session_start();
// destroy session
	session_destroy();
// redirect user to login page
	header("location:localhost:8080/php-user-authentication/index.php");
?>