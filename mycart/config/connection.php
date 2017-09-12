<?php
	
	$host = "localhost";
	$user = "root";
	$pass= "";
	$dbname = "shop";

	$conn = mysqli_connect($host,$user,$pass,$dbname);

	if(!$conn){
		echo "Error: Connection Failed<br/>";
	}

?>