<?php

	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include_once "../config/connection.php";
		include_once "../config/functions.php";

		 $user = cleanText($_POST['user']);
		 $pass = cleanText($_POST['pass']);

		// if field empty

		if(empty($user) ||  empty($pass)){
			echo "<script> alert('Field must not be empty')</script>";
			echo "Redirected:.........";
			header("refresh:1;url=login.php");
		}else{

			// retrieve user from database

			$q = "
			SELECT * FROM users
			WHERE (name = '$user' or email = '$user' or username = '$user' )
			AND password = md5('$pass')
			";
			$qq= mysqli_query($conn,$q);

			if(mysqli_num_rows($qq) > 0){
				while($res = mysqli_fetch_assoc($qq)){

					// check if user is active or pending

					if($res['active'] != 0){//user is active goto next check

						//check type of user 0---default user  1----moderator 2------adminstrator

						if($res['type'] == 0){//default user


						}else if($res['type'] == 1){//moderator


						}if($res['type'] == 2){//adminstrator
							$_SESSION['id'] = $res['id'];
							$_SESSION['name']  = $res['name'];
							echo "<script> alert('Welcome Back ".$res['name'] ."')</script>";
							echo "Redirected To Your DashBoard:.........";
							header("refresh:1.5;url=../admin/index.php");


						}


					}else{
						echo "Still Pending Please Log in Later We Will Approved You Soon...... ";
						echo "Redirected .........";
				        header("refresh:3;url=../index.php");
					}

				}
				


			}else{
				echo "<script> alert('Invalid User Or Password!!!')</script>";
				echo "Redirected .........";
				header("refresh:1;url=login.php");
			}
		}



		
	}
?>