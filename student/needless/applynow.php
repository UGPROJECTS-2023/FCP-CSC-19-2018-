<?php
include("../functions.php");
include("MainMenu.php");
$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
$check= "SELECT * FROM mainclearance WHERE UserName ='$useridentity'";
$checkresult= mysqli_query($db, $check);
$result= mysqli_num_rows($checkresult);
if($result>0){
	echo '<script>alert("You have already applied for clearance, Cannot apply more than once !!! ");</script>';
	exit("Cannot apply more than once");
}
 if (isset($_POST['apply'])) {
     $stdname=$_POST['stdname'];
     $stdno=$_POST['stdno'];    
     $regno=$_POST['regno'];
     $course=$_POST['course'];
     $coursecode=$_POST['coursecode'];
     $program=$_POST['program'];
     $faculty=$_POST['faculty'];
     $department=$_POST['dept'];
     $hall=$_POST['hall'];
     $yoe=$_POST['yoe'];
     $yos=$_POST['yos'];
     $gender=$_POST['gender'];
     $email=$_POST['email'];
	  $sql=mysqli_query($db,"INSERT INTO mainclearance(StudentName, UserName, RegNo)
	 values('$stdname', '$useridentity', '$regno')");
	 
	 if ($sql) {
		echo "<script>alert('Student has Applied Successfully')</script>;";
		die ("Ok");
	 }
	 else{
		echo "<script>alert('Something went wrong  Retry to apply Again!')";
	 }
}
 
 ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
                <ol class="breadcrumb">
                    <li><a href="#">Student</a></li>
                    <li><a href="#">Student Portal</a></li>
                    <li class="active">Apply For Clearance</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Student Clearance Application Form</div>
            <div class="panel-body">
                <div class="header">
                    
                </div>
                <div class="jumbotron">
                <form method="post" action="">

                    <?php echo display_error(); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Full Name:</label>
                        <input type="text" name="stdname" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Clinic Card Number:</label>
                        <input type="text" name="stdno" class="form-control" maxlength="40" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputamouont">Registration Number:</label>
                        <input class="form-control"  name="regno" type="text" required="" maxlength="20">
                    </div>
					<div class="form-group">
                        <label for="exampleInputcourse">Faculty:</label>
                        <select id="faculty" name="faculty" class="form-control" onchange="displayDept()" required="">
							<option></option>
							<option value="ahs">Allied Health Sciences</option>
							<option value="agr">Agriculture</option>
							<option value="fais">Arts And Islamic Studies </option>
							<option value="bms">Basic Medical Sciences</option>
							<option value="csc">Clinical Sciences</option>
							<option value="fcsit">Computer Science And Information Technology</option>
							<option value="comm">Communications</option>
							<option value="den">Dentistry </option>
							<option value="ees">Earth And Environmental Science</option>
							<option value="edu">Education</option>
							<option value="engr">Engineering</option>
							<option value="law">Law</option>
							<option value="lsc">Life Sciences</option>
							<option value="sms">Social And Management Sciences</option>
							<option value="psc">Pharmaceutical Sciences</option>
							<option value="phys">Physical Sciences</option>
						</select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Department:</label>
						<select id="dept" name="dept" class="form-control" required="" onchange="displayCourse()"></select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Course:</label>
                        <select id="course" name="course" class="form-control" required=""></select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputcourse">Course Accreditation Code:</label>
                        <select type="text" name="coursecode" class="form-control" required="" readonly >
							<option value="NUC Accreditation Code" selected>NUC Accreditation Code</option>
						</select>
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Program Status:</label>
                        <select name="program"  class="form-control" required="">
                        <option></option>
                        <option value="Full Time">Full Time (Regular)</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                    </div>
                      
                      <div class="form-group">
                        <label for="exampleInputcourse">Hall:</label>
                        <input type="text" name="hall" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Year of Entry:</label>
                        <input type="text" name="yoe" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Duration:</label>
                        <input type="text" name="yos" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender:</label>
                        <select name="gender"  class="form-control" required="">
                        <option></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email"  class="form-control" required="">
                    </div> 
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" name="apply">Apply</button>
                    </div>
                </form></div>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->