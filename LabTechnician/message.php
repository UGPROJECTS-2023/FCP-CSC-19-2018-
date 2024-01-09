<?php
include("../functions.php");
include("MainMenu.php");
$rowInfo=$_GET['rowId'];
$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
$fullname= isset($_POST['fname']) ? $_POST['fname'] : $_SESSION['fname'];
if (isset($_POST['Submit'])) {
	$dept=$_POST['dept'];
    $stdname =$_POST['stdname'];
    $regno=$_POST['regno'];
    $clstatus=$_POST['clstatus'];
    $Comment=$_POST['comment'];
    $clearedby=$_POST['clearedby'];
    $sql=mysqli_query($db,"INSERT INTO feedback(StudentName,RegNo,Status,Reason,SentBy,Department)
											VALUES('$stdname','$regno','$clstatus','$Comment','$clearedby','$dept')");
	if ($sql) {
		echo "<script>alert('Message has been sent successfully!')</script>;";
		die ("Ok!!!");
	}else {
	echo "<script>alert('failed')</script;"; 
	}
}
 ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Student Message Center </h1>
                <ol class="breadcrumb">
                    <li><a href="#">LAB Technician</a></li>
                    <li><a href="#">Message Center</a></li>
                    <li class="active">Send Message</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
    <div class="panel-heading">Send Message
</div>
    <div class="panel-body">
    <form action="" method="POST">
      <label>Section/Department Sending Message</label>
      <select name="dept" class="form-control" required readonly>
			<option value="Library" selected>LAB Technician</option>
        </select>
        <br>

   <label> Name </label>
     
<select name="stdname"  class="form-control" required readonly> 
<?php $query ="SELECT * FROM mainclearance where RegNo= '$rowInfo'";
$stmt2 = $db->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->StudentName;?>" selected><?php echo $row->StudentName;?>&nbsp;&nbsp;</option>
<?php } ?>
</select> 
<br/>
  <label> Registration Number </label>
     
<select name="regno"  class="form-control" required readonly> 
<?php $query ="SELECT * FROM mainclearance where RegNo= '$rowInfo'";
$stmt2 = $db->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->RegNo;?>" selected><?php echo $row->RegNo;?>&nbsp;&nbsp;</option>
<?php } ?>
</select> 
<br/>
	<div>
      <label>Student Clearance Status</label>
		<select name="clstatus" class="form-control" required>
        <option value="Declined" selected> Declined</option>
		</select>
	</div>
<br/>	<div>
      <label>Message / Comment</label>
      <textarea name="comment" class="form-control" rows="4" cols="40" autofocus></textarea><BR>
      <label>Message Sending By</label>
	  <select name="clearedby"  class="form-control" required readonly> 
      <option type="text" class="form-control" <?php echo 'value="'.$fullname.'"'; ?> selected><?php echo $fullname; ?></option> 
	  </select><br><br>
	  </div>
		<div>
      <input type="submit" name="Submit" class="btn btn-primary" value="Submit" style="background:#6b0d00;">
	  </div>
  </form>
            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
<?php echo display_error(); ?>
