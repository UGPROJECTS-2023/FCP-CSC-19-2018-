<?php
 include("../functions.php");
include("MainMenu.php");
 if (isset($_POST['apply'])) {
	 $username=$_POST['username'];
     $fullname=$_POST['stdname'];
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
     $sql=mysqli_query($db,"INSERT INTO applicants('UserName',StudentName,StudentNo,RegNo,Course,CourseCode,
						Program,Faculty,Department,Hall,Year_Of_Entry,Year_Of_Study,Gender,Email)
						values('$username','$stdname','$stdno','$regno','$course','$coursecode',
						'$program','$faculty','$department','$hall','$yoe','$yos','$gender','$email')");
 
 if ($sql) {
    echo "<script>alert('Student has Applied Successfully')</script>;";
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
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Student</a></li>
                    <li class="active">Apply Student</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Student Clearance Application Form</div>
            <div class="panel-body">
                <div class="header">
                    
                </div>
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
                        <input type="text" name="course" class="form-control" required="">
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
                        <button type="submit" class="btn btn-primary" name="apply" style="background-color:#6fbed9;">Apply</button>
                    </div>
                </form>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->