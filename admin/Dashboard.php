<?php
include("../functions.php");
include("MainMenu.php");


?>
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
                <ol class="breadcrumb">
					<li><a href="#">Admin</a></li>
					<li><a href="#">Dashboard</a></li>
					<li class="active">Overview</li>
				</ol>
            </div>
        </div>
        <div class="panel panel-default">
			<div class="panel-heading">Admin Dashboard Analysis OverView</div>
			<div class="panel-body">
		   
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="background-color:  #6b0d00; color: #ffffff; border-radius : 25px;">
    	<center>
<?php
$result ="SELECT count(*) FROM mainclearance  where CoordinatorStatus='Accepted' AND lvlCoordinatorStatus='Accepted' AND sCoordinatorStatus='Accepted' AND HoDStatus='Accepted' AND pCoordinatorStatus='Accepted' AND lTechnicianStatus='Accepted' ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p> 
      </center>
      <div class="caption">
        <center><h3 style="color: white;">Cleared Students</h3></center>     
        <center><p> <a href="clearedStd.php" style="color: white; ">View Details</a></p></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #b8b894; color: #ffffff; border-radius : 25px;">
    	<center>
        <?php
$result ="SELECT count(*) FROM  Applicants";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p>      
		</center>
      <div class="caption">
        <center><h3 style="color: white;">Applied Students</h3>
        
        <p> <a href="manageapplicant.php" style="color: white; ">View Details</a></p></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #00331a; color: #ffffff; border-radius : 25px;">
    	<center>
         <?php
$result ="SELECT count(*) FROM mainclearance  WHERE CoordinatorStatus='No respond yet' OR lvlCoordinatorStatus='No respond yet' OR sCoordinatorStatus='No respond yet' OR HoDStatus='No respond yet' OR pCoordinatorStatus='No respond yet' OR lTechnicianStatus='No respond yet' ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p>
        </center>
      <div class="caption">
        <center><h3 style="color: #ffffff;">Pending Students</h3>
			<p> <a href="pendingstudents.php" style="color: white; ">View Details</a></p>
		</center>
      </div>
    </div>
  </div>
 
</div>
<div class="row">
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color:  #666699; color: #ffffff; border-radius : 25px;">
    	<center>
 <?php
$result ="SELECT count(*) 
FROM users  where NOT UserType='student' AND  NOT UserType='user'";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p>      </center>
      <div class="caption">
        <center><h3 style="color: white;">Clearance Staffs</h3>
        
        <p> <a href="ManageUsers.php" style="color: white; ">View Details</a></p>
		</center>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #1a0000; color: #ffffff; border-radius : 25px;">
    	<center>
   <?php
$result ="SELECT count(*) 
FROM requirements ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p>
      </center>
      <div class="caption">
        <center><h3 style="color: #ffffff;">Clearance Requirements</h3>
        
        <p> <a href="manageRequirement.php" style="color: white; ">View Details</a></p></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color:#c68c53; color: #ffffff; border-radius : 25px;">
    	<center>
 <?php
$result ="SELECT count(*) FROM users  where  UserType='student'";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p>
		</center>
      <div class="caption">
        <center><h3 style="color: white;">Registered Students</h3>
        <p><a href="registerdStudents.php" style="color: white; ">View Details</a></p>
		</center>
      </div>
    </div>
  </div>

</div>





			</div>
		    <div class="panel-footer">Admin OverView </div>
		</div>  
	</div>
        <!-- end of container -->
</div>
