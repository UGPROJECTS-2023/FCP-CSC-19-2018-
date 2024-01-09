<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Students Clearance System</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #ADD8E6;
		}
		button[name=register_btn] {
			background: #ADD8E6;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin -  user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="lab">Lab attendant</option>
			   <option value="hod">Head</option>
				<option value="lib">Librarian</option>
				<option value="busar">Busar</option>
				<option value="student">Student</option>

			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn" style="background-color:#6fbed9;"> + Create user</button>
		</div>
	</form>
</body>
</html>