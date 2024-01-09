<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Student clearance System</title>
	<link rel="shortcut icon" type="img/png" href="logo.jpeg">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style="background-image: url(fud.jpeg); background-repeat: no-repeat; background-size: cover;">

	<div class="header" style="background-color: #6b0d00;">
		<h1><img src="logo.jpeg" height="40px" width="35px"></h1>
		<h2>Clearance Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn" style="background-color: #6b0d00;">Login</button>
		</div>
		<!-- <p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p> -->
	</form>


</body>
</html>