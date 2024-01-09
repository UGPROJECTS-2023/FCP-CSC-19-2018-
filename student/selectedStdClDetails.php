<?php
include("../functions.php");
include("MainMenu.php");
$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
$check= "SELECT * FROM mainclearance WHERE UserName ='$useridentity'";
$checkresult= mysqli_query($db, $check);
$result= mysqli_num_rows($checkresult);
if($result==0){
	echo '<script>alert("You have not applied for clearance yet!!!");</script>';
	exit("You have not apply for clearance yet!!! Click on apply.");
}
?>



<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Federal University, Dutse</h1>
                <ol class="breadcrumb">
                    <li><a href="#"></a>Student Clearance Details</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
			<?php
				
				$sql= "SELECT * FROM mainclearance where UserName ='$useridentity'";
				$query= mysqli_query($db, $sql);
				$rows=mysqli_fetch_array($query);
			?>
            <div class="panel-heading"><h3><b><?php echo $rows['StudentName']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rows['RegNo']; ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</h3>
			</div>
            <div class="panel-body">
            <table class="table table-striped" id="detail_table"> 
			<thead>
			<th>Department</th><th>Clearance Status</th><th>Cleared By</th>
			</thead>
			<tbody>
				<tr>
					<td>Coordinator</td><td <?php if ($rows['CoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['CoordinatorStatus']; ?></td><td <?php if ($rows['CoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['Coordinator_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Head Of Department</td><td <?php if ($rows['HoDStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['HoDStatus']; ?></td><td <?php if ($rows['HoDStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['HoD_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Level Coordinator</td><td <?php if ($rows['lvlCoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['lvlCoordinatorStatus']; ?></td><td <?php if ($rows['lvlCoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['lvlCoordinator_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>SIWES Coordinator</td><td <?php if ($rows['sCoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['sCoordinatorStatus']; ?></td><td <?php if ($rows['sCoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['sCoordinator_Cleared_By']; ?></td>
				</tr>
				
				<tr>
					<td>Project Coordinator</td><td <?php if ($rows['pCoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['pCoordinatorStatus']; ?></td><td <?php if ($rows['pCoordinatorStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['pCoordinator_Cleared_By']; ?></td>
				</tr>
				
				<tr>
					<td>Lab Technician</td><td <?php if ($rows['lTechnicianStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['lTechnicianStatus']; ?></td><td <?php if ($rows['lTechnicianStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['lTechnician_Cleared_By']; ?></td>
				</tr>
			</tbody>
			
            </div>
        </div>
    </div> <!-- end of container -->
	<div>
	<a class="btn btn-default btn-lg btn-block" href="printclearance.php">Print</a>
	<!--<a href="printclearance.php">Print</a></b>-->
	</div>
</div><!--     end of page warp -->
