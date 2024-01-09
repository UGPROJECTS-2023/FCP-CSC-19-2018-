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
					<li><a href="#">Academic Office</a></li>
					<li><a href="#">Dashboard</a></li>
					<li class="active">Overview</li>
				</ol>
            </div>
        </div>
        <div class="panel panel-default">
			<div class="panel-heading">Academic Office</div>
<div class="panel-body">
		   
<div class="row">
  <div class="col-md-6">
    <div class="thumbnail" style="background-color:  #6b0d00; color: #ffffff; border-radius : 25px;">
    	<center>
<?php
$result ="SELECT count(*) FROM mainclearance  WHERE (BursarStatus='Accepted' and 
ComputerLabStatus='Accepted' and DoSStatus='Accepted' and HallAdminStatus='Accepted' and
HoDStatus='Accepted' and LabStatus='Accepted' and LibraryStatus='Accepted' and MedicalStatus='Accepted' and
SecurityStatus='Accepted' and SportsStatus='Accepted')";
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
  <div class="col-md-6" >
    <div class="thumbnail" style="background-color: #00331a; color: #ffffff; border-radius : 25px;">
    	<center>
         <?php
$result ="SELECT count(*) FROM mainclearance  WHERE BursarStatus='No respond yet' or 
ComputerLabStatus='No respond yet' or DoSStatus='No respond yet' or HallAdminStatus='No respond yet' or
HoDStatus='No respond yet' or LabStatus='No respond yet' or LibraryStatus='No respond yet' or MedicalStatus='No respond yet' or
SecurityStatus='No respond yet' or SportsStatus='No respond yet' ";
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

  </div>

</div>





			</div>
		    <div class="panel-footer">Academic Office OverView </div>
</div>  
	