<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form action="check.php" method="POST">
					<input type="text" name="user" placeholder="Username Or Email Or Name">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="register.php">Register</a> - <a href="reset.php">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>


</body>
</html>