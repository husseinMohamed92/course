<?php

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			include_once "../config/connection.php";
			include_once "../config/functions.php";

			 $name = cleanText($_POST['name']);
			 $email = cleanText($_POST['email']);
			 $username = cleanText($_POST['username']);
			 $password = cleanText($_POST['password']);
			 $confirm = cleanText($_POST['confirm']);

			 if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirm)){
			 	echo "<script> alert('You Should Fill All Fields...')</script>";
			 	
			 }else{

			 		if(strlen($name)<3 || strlen($username)  <5){
			 			echo "<script> alert('user and username length must be greater than 4 character')</script>";
			 		}else{

			 			if($password  != $confirm ){

			 				echo "<script> alert('password doesn\'t match')</script>";
			 			}else{

			 				if(strlen($password)<8){
			 					echo "<script> alert('password length must be at lesat  8 character')</script>";
			 				}else{

			 					// Check if this user exist before
			 						$q = "SELECT * FROM users 
			 								where name = '$name' 
			 								or username = '$username'
			 								or email = '$email'

			 						";

			 						$qq = mysqli_query($conn,$q);
			 						if(mysqli_num_rows($qq) > 0 ){

			 							echo "<script> alert('This User Already Exist...')</script>";

			 							// End if this user exist before

			 						}else{

				 							// send data to database 

				 					$q = "
				 						INSERT INTO users(name,username,email,password) values('$name','$username','$email',md5('$password'))
				 						";
				 					$qq = mysqli_query($conn,$q);
				 					if($qq){
				 						echo "<script> alert('Register Succed Wait To Be Approval Soon....')</script>";
				 						echo "Redirected To Main Page......";
				 						header("refresh:4;url=../index.php");
				 						// end of sending data to database
			 						}
			 						else{
			 						echo "<script> alert('There Are Problem Registeration Try Again Later!!!!!!')</script>";
			 					}
			 				}

			 				}
			 				
			 			}

			 		}

			 }

		}

?>

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="css/register.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">My Cart</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="POST" action="<?php echo ($_SERVER['PHP_SELF']) ?>">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="login.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>