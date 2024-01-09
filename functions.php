<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'tproject');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 
	if ($db->connect_error){
		die ("Connection failed:".$db->connect_error);
	}
	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}
	
	//MY REGISTER2 BUTTON (For admin users)
	if (isset($_POST['register_btn2'])) {
		register2();
	}
	// STOP HERE
	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$name= $_POST['name'];
		$username    = $_POST['username'];
		$stdno       = $_POST['stdno'];
		$faculty = $_POST['faculty'];
		$dept = $_POST['dept'];
        $course = $_POST['course'];
		$usertype = $_POST['user_type'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
		$password_2  = $_POST['password_2'];

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { 
			array_push($errors, "Name is required"); 
		}
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
				$filename = $_FILES['file']['name'];
				$target_dir = "../myimages/";
				$target_file = $target_dir . basename($_FILES["file"]["name"]);

				// Select file type
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Valid file extensions
				$extensions_arr = array("jpg","jpeg","png","gif");
				
				if( in_array($imageFileType,$extensions_arr) ){
				$query = "INSERT INTO users ( name, UserName, studentNo, Faculty, Department, course ,Email, UserType, Password, Picture) 
						  VALUES('$name','$username', '$stdno' , '$faculty', '$dept', '$course' ,'$email','$usertype', '$password','$filename')";
				mysqli_query($db, $query);
				move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$filename);
				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('Location: Dashboard.php');
				}
			//}

		}

	}
	//MY REGISTER2 FUNCTION (For admin users)
	
	function register2(){
		global $db, $errors;

		// receive all input values from the form
		$name = $_POST['name'];
		$username = $_POST['username'];
		$staffNo= $_POST['staffno'];
		$faculty = $_POST['faculty'];
		$dept = $_POST['dept'];
		$user_type = $_POST['user_type'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			/* if (isset($_POST['UserType'])) {
				$user_type = e($_POST['UserType']);
				$query = "INSERT INTO users (UserName,studentNo,course,Email, UserType, Passsword) 
						  VALUES('$username','$stdno' ,'$course','$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('Location: Dashboard.php');
			}else{ */
				$query = "INSERT INTO users ( name, UserName, studentNo, Faculty, Department, course ,Email, UserType, Password, Picture) 
						  VALUES('$name','$username', '$staffNo' , '$faculty', '$dept' ,'Not a Student' ,'$email', '$user_type', '$password', 'Not a Student')";
				mysqli_query($db, $query);
				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('Location: Dashboard.php');
				
			//}

		}

	}
	
	
	// STOP HERE
	
	
	
	

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE UserName='$username' AND Password='$password' LIMIT 1";
			
			$results = mysqli_query($db, $query);
			$_SESSION['userN']= $username;
			
			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				$fullname = $logged_in_user['name'];
				$faculty = $logged_in_user['Faculty'];
				$department = $logged_in_user['Department'];
				$regno = $logged_in_user['studentNo'];
				$email = $logged_in_user['Email'];
				$course = $logged_in_user['course'];
				$_SESSION['fname']= $fullname;
				$_SESSION['faculty']= $faculty;
				$_SESSION['department']= $department;
				$_SESSION['regno']= $regno;
				$_SESSION['email']= $email;
				$_SESSION['course']= $course;
				if ($logged_in_user['UserType'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: admin/Dashboard.php');		  
				}
				elseif($logged_in_user['UserType'] == 'Coordinator') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Coordinator/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Lab Technician') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: LabTechnician/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'HoD') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: HoD/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Level Coordinator') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: lvlCoordinator/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Project Coordinator') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: ProjectCoordinator/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'SIWES Coordinator') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: SIWESCoordinator/Dashboard.php');
					
				}
				else{
					
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: student/Dashboard.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['UserType'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}
	function isCoordinator()
	{
		if(isset($_SESSION['user']) && $_SESSION['user']['UserType'] == 'Coordinator') {
			return true;
		}else{
			return false;
		}
	}
	function isLabTechnician()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'LabTechnician') {
			return true;
		}else{
			return false;
		}
	}
	function isHoD()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'HoD'){
			return true;
		}else{
			return false;
		}
	}
	function islvlCoordinator()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'lvlCoordinator'){
			return true;
		}else{
			return false;
		}
	}
	function isProjectCoordinator()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'ProjectCoordinator'){
			return true;
		}else{
			return false;
		}
	}
	function isSIWESCoordinator()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'SIWESCoordinator'){
			return true;
		}else{
			return false;
		}
	}
	
	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>