<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include_once "../config/connection.php";
		include_once "../config/functions.php";

		$user = cleanText($_POST['user']);
		$pass = cleanText($_POST['pass']);

		
	}
?>