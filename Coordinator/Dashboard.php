<?php
include("../functions.php");
include("MainMenu.php");


?>
 <!-- Page Content -->
    <div id="page-wrapper" style="color:#6b0d00;">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                    <ol class="breadcrumb">
					  <li><a href="#">Coordinator</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Overview</li>
					</ol>
                </div>
            </div>
            <div class="panel panel-default">
		  <div class="panel-heading">Coordinator Dashboard Analysis OverView</div>
		  <div class="panel-body">
		   
<div class="row">
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color:  #6b0d00; color: #ffffff; border-radius : 25px;">
    	<center>
 <?php
$result ="SELECT count(*) FROM mainclearance  where CoordinatorStatus='Accepted' ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p>
</center>
      <div class="caption">
        <center><h3 style="color: white;">Cleared Students</h3>
        <p> <a href="clearedStd.php" style="color: white; ">View Details</a></p>
		</center>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #b8b894; color: #ffffff; border-radius : 25px;">
<center>

<?php
$result ="SELECT count(*) FROM mainclearance  where CoordinatorStatus='No respond yet' AND HodStatus='Accepted'";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 ">
<?php echo $count;?></p>
</center>
<div class="caption">
        <center><h3 style="color: white;">Pending Students</h3>
        
        <p> <a href="AppliedStudents.php" style="color: white; ">View Details</a></p>
		</center>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #00331a; color: #ffffff; border-radius : 25px;">
    	<center>
 <?php
$result ="SELECT count(*) FROM mainclearance  where CoordinatorStatus='Declined' ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?></p>
      </center>
      <div class="caption">
        <center><h3 style="color: #ffffff;">Declined Students</h3>
        <p> <a href="Declinedstudents.php" style="color: white; ">View Details</a></p>
		</center>
      </div>
    </div>
  </div>

</div>
</div>
</div>
		    <div class="panel-footer">Coordinator OverView </div>		
			</div>  
	   </div>
        <!-- end of container -->