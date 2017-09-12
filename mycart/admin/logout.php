<?php

	session_start();

	unset($_SESSION['id']);
	unset($_SESSION['name']);

	session_destroy();
	echo "Log Out Redirected ......";
	header("refresh:2;url=../auth/login.php");
?>