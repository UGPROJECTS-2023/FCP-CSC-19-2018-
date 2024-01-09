<!DOCTYPE html>
<?php 
	$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title >Online Students Clearance System | MainMenu</title>
    <link rel="shortcut icon" type="img/png" href="img/logo.jpeg">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
a{
	color:#6b0d00;
}
a:hover{
	color:orange;
}
</style>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#6b0d00;">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Online Students Clearance System</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> FUD</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse" style="background:#6b0d00;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Notifications
                                <span class="pull-right text-muted small">2 Days Ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong> See All Updates</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> My Account <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-edit fa-fw"></i> Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button" style="background:#6b0d00;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="Dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
					<li>
                   
                        <a href="checkrequirement.php"><i class="fa fa-th fa-fw"></i> Check Requirements</a>
                    </li>
                    <li> 
						<?php 
							$check= "SELECT * FROM mainclearance WHERE UserName ='$useridentity'";
							$checkresult= mysqli_query($db, $check);
							$result= mysqli_num_rows($checkresult);
							if($result<1){
								echo '<a href="apply.php"><i class="fa fa-edit fa-fw"></i> Apply For Clearance</a>';}
							else{
								echo '<a href="javascript:void(0)"><i class="fa fa-edit fa-fw"></i> Apply For Clearance</a>';
							}?>
                    </li>
                    <li>
					<?php 
							$check= "SELECT * FROM mainclearance WHERE UserName ='$useridentity'";
							$checkresult= mysqli_query($db, $check);
							$result= mysqli_num_rows($checkresult);
							if($result<1){
								echo '<a href="#"><i class="fa fa-th-list fa-fw"></i> Clearance Status</a>';}
							else{
								echo '<a href="selectedStdClDetails.php"><i class="fa fa-th-list fa-fw"></i> Clearance Status</a>';
							}?>
                    </li>
                    <li>
                        <li>
                    <a href="notification.php"><i class="glyphicon glyphicon-envelope"></i> Messages</a>
                    </li>

                            
                       
                     
                </ul>

            </div>
        </div>
    </nav>

    
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/hanan24.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
