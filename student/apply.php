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
                <form method="post" action="DashboardRedirect.php">

                    <?php echo display_error(); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Full Name:</label>
						<select name="stdname"  class="form-control" required readonly> 
							<?php $query ="SELECT * FROM users where UserName= '$useridentity'";
							$stmt2 = $db->prepare($query);
							$stmt2->execute();
							$res=$stmt2->get_result();
							while($row=$res->fetch_object())
							{
							?>
							<option value="<?php echo $row->name;?>" selected><?php echo $row->name;?>&nbsp;&nbsp;</option>
							<?php } ?>
						</select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Clinic Card Number:</label>
                        <input type="text" name="clinicno" class="form-control" maxlength="40" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputamouont">Registration Number:</label>
						<select name="regno"  class="form-control" required readonly> 
							<?php $query ="SELECT * FROM users where UserName= '$useridentity'";
							$stmt2 = $db->prepare($query);
							$stmt2->execute();
							$res=$stmt2->get_result();
							while($row=$res->fetch_object())
							{
							?>
							<option value="<?php echo $row->studentNo;?>" selected><?php echo $row->studentNo;?>&nbsp;&nbsp;</option>
							<?php } ?>
						</select>
                    </div>
					<div class="form-group">
                        <label for="exampleInputcourse">Faculty:</label>
                        <select name="faculty"  class="form-control" required readonly> 
							<?php $query ="SELECT * FROM users where UserName= '$useridentity'";
							$stmt2 = $db->prepare($query);
							$stmt2->execute();
							$res=$stmt2->get_result();
							while($row=$res->fetch_object())
							{
							?>
							<option value="<?php echo $row->Faculty;?>" selected><?php echo $row->Faculty;?>&nbsp;&nbsp;</option>
							<?php } ?>
						</select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Department:</label>
						<select name="dept"  class="form-control" required readonly> 
							<?php $query ="SELECT * FROM users where UserName= '$useridentity'";
							$stmt2 = $db->prepare($query);
							$stmt2->execute();
							$res=$stmt2->get_result();
							while($row=$res->fetch_object())
							{
							?>
							<option value="<?php echo $row->Department;?>" selected><?php echo $row->Department;?>&nbsp;&nbsp;</option>
							<?php } ?>
						</select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Course:</label>
						<select name="course"  class="form-control" required readonly> 
							<?php $query ="SELECT * FROM users where UserName= '$useridentity'";
							$stmt2 = $db->prepare($query);
							$stmt2->execute();
							$res=$stmt2->get_result();
							while($row=$res->fetch_object())
							{
							?>
							<option value="<?php echo $row->course;?>" selected><?php echo $row->course;?>&nbsp;&nbsp;</option>
							<?php } ?>
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
                        <label for="exampleInputEmail1">Gender:</label>
                        <select name="gender"  class="form-control" required="">
                        <option></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <select name="email"  class="form-control" required readonly> 
							<?php $query ="SELECT * FROM users where UserName= '$useridentity'";
							$stmt2 = $db->prepare($query);
							$stmt2->execute();
							$res=$stmt2->get_result();
							while($row=$res->fetch_object())
							{
							?>
							<option value="<?php echo $row->Email;?>" selected><?php echo $row->Email;?>&nbsp;&nbsp;</option>
							<?php } ?>
						</select>
                    </div> 
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" name="apply" style="background:#6b0d00;">Apply</button>
                    </div>
                </form></div>



            </div>
        </div>
    </div> 
</div>