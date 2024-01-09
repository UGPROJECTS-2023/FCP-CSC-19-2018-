<?php
include("../functions.php");
include("MainMenu.php");

$rowInfo=$_GET['rowId'];

?>



<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bayero University, Kano</h1>
                <ol class="breadcrumb">
                    <li><a href="#"></a>Student Clearance Details</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
			<?php
				$sql= "SELECT * FROM mainclearance where RegNo ='$rowInfo'";
				$query= mysqli_query($db, $sql);
				$rows=mysqli_fetch_array($query);
			?>
            <div class="panel-heading"><h3><b><?php echo $rows['StudentName']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $rows['RegNo']; ?></b></h3></div>
            <div class="panel-body">
            <table class="table table-striped" id="detail_table"> 
			<thead>
			<th>Department</th><th>Clearance Status</th><th>Cleared By</th>
			</thead>
			<tbody>
				<tr>
					<td>Bursary Office</td><td <?php if ($rows['BursarStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['BursarStatus']; ?></td><td><?php echo $rows['Bursar_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Medical Department</td><td <?php if ($rows['MedicalStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['MedicalStatus']; ?></td><td><?php echo $rows['Medical_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Computer Lab</td><td <?php if ($rows['ComputerLabStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['ComputerLabStatus']; ?></td><td><?php echo $rows['CompLab_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Dean Of Student Affairs</td><td <?php if ($rows['DoSStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['DoSStatus']; ?></td><td><?php echo $rows['DoS_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Hall Admin</td><td <?php if ($rows['HallAdminStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['HallAdminStatus']; ?></td><td><?php echo $rows['HallAdmin_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Head Of Department</td><td <?php if ($rows['HoDStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['HoDStatus']; ?></td><td><?php echo $rows['HoD_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Laboratory</td><td <?php if ($rows['LabStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['LabStatus']; ?></td><td><?php echo $rows['Lab_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Library</td><td <?php if ($rows['LibraryStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['LibraryStatus']; ?></td><td><?php echo $rows['Library_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Security Department</td><td <?php if ($rows['SecurityStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['SecurityStatus']; ?></td><td><?php echo $rows['Security_Cleared_By']; ?></td>
				</tr>
				<tr>
					<td>Sports Department</td><td <?php if ($rows['SportsStatus']!="Accepted"){ echo 'style="color:red";';} ?>><?php echo $rows['SportsStatus']; ?></td><td><?php echo $rows['Sports_Cleared_By']; ?></td>
				</tr>
				
			</tbody>
            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
