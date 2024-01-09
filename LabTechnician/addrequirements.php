 <?php
include("../functions.php");
include("MainMenu.php");
$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
$fullname= isset($_POST['fname']) ? $_POST['fname'] : $_SESSION['fname'];
 if (isset($_POST['add'])) {
     $category=$_POST['category'];
     $req =$_POST['req'];
     $office=$_POST['office'];
     $sql=mysqli_query($db,"INSERT INTO requirements(StudentCategory,Description,AddedBy, Office)values('$category','$req','$fullname', '$office')");
 
 if ($sql) {
    echo "<script>alert('New Requirements has been successfully!')</script>;";

 }
 else {
echo "<script>alert('failed')</script;"; 
}}
 ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Requirements</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Lab Technician</a></li>
                    <li><a href="#">Requirement</a></li>
                    <li class="active">Add Requirement</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Requirement for CLearance</div>
            <div class="panel-body">
                <form method="post" >
<div class="form-group">
<label >Student Category </label>
<select name="category"  class="form-control" required> 
<option value="">Select category</option>
<option value="For All Students"> For All Students </option>
<option value="Only Government Sponsored Students">Only Government Sponsored Students</option>
<option value="Only Private Sponsored Students">Only Private Sponsored Students </option>
<option value="Residence Students"> Only Residence Students</option>
<option value="International Students">International Students</option>
<option value="Only Students in Hostel">Only Students in Hostel</option>
</select> 
</div>
<div class="form-group">
 <label for="exampleInptEmail1">Requirement Description</label>
 <textarea class="form-control" name="req" rows="10"></textarea>
</div>
<div class="form-group">
<label >Select Your Office </label>
<select name="office"  class="form-control" required> 
<option value="">Select Office</option>
<option value="Dean"> Coordinator</option>
<option value="Head Of Department"> Head Of Department </option>
<option value="Bursary Office">Level Cord</option>
<option value="Library"> SIWES Coordinator  </option>
<option value="Dean of Student Affairs"> Project Coordinator</option>
<option value="Medical Center"> Lab Technician</option>

</select> 
</div>
	<div class="form-group">
    <label for="exampleInputEmail1">Added By</label>
    <select name="clearedby"  class="form-control" required readonly> 
		<option type="text" class="form-control" <?php echo 'value="'.$fullname.'"'; ?> selected><?php echo $fullname; ?></option> 
	</select><br>
    </div>
<div class="input-group">
 <button type="submit" class="btn btn-primary" name="add" style="background:#6b0d00;"> + Add  Requirement</button>
</div></form>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
<?php echo display_error(); ?>
