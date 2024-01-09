<?php
include("../functions.php");
include("MainMenu.php");

	
 ?>
 <script>
 function displayDept(){
	
	var facultyValue = document.getElementById("faculty");
	var optionValue = facultyValue[facultyValue.selectedIndex].value;
	//alert("Everything is alright at this level");
	if (optionValue == "Faculty of Computing"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Department of Computer Science'];
		deptValue = ['Department of Computer Science'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}else if (optionValue == "Non Academic Staff"){
		var element1 = document.getElementById("dept");
		while (element1.options.length > 0){
			element1.remove(0);
		}
		deptList = ['Non Academic Staff'];
		deptValue = ['Non Academic Staff'];
		for (var i=0; i < deptList.length; i++){
			var opt = document.createElement("option");
			var displayText = document.createTextNode(deptList[i]);
			opt.value = deptValue[i];
			opt.appendChild(displayText);
			element1.appendChild(opt);
		}
	}

}
 </script>
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                	  <ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Admin</a></li>
					  <li class="active">Data</li>
					</ol>
                </div>
            </div>
            <div class="panel panel-default">
		  <div class="panel-heading">Add New User</div>
		  <div class="panel-body">
		  	<div class="header">
		<h2>Admin -  user</h2>
	</div>
	
	<form method="post" action="AddUser.php">

		<?php echo display_error(); ?>
		<div class="form-group">
    <label for="exampleInputEmail1">Full name</label>
			<input type="text" name="name"   class="form-control">
		</div>
		<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
			<input type="text" name="username"   class="form-control">
		</div>
		<div class="form-group">
    <label for="exampleInputEmail1">Staff Number</label>
			<input type="text" name="staffno"   class="form-control">
		</div>
       <div class="form-group">
    <label for="exampleInputEmail1">Emails</label>
			<input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
		</div>
<div class="form-group">
    <label for="exampleInputEmail1">User_Type</label>			
			<select name="user_type" id="user_type" class="form-control" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="Coordinator">Coordinator</option>
			   <option value="HoD">Head of Department</option>
				<option value="Level Coordinator">Level Coordinator</option>
				<option value="SIWES Coordinator">SIWES Coordinator</option>
				<option value="Project Coordinator">Project Coordinator</option>
				<option value="Lab Technician">Lab Technician</option>
			</select>
		</div>
		
		<div class="form-group">
                        <label for="exampleInputcourse">Faculty:</label>
                        <select id="faculty" name="faculty" class="form-control" onchange="displayDept()" required="">
							<option></option>
							<option value="Non Academic Staff">Non Academic Staff</option>
							<option value="Admin Staff">Admin Staff</option>
							
							<option value="Faculty of Computing">Faculty of Computing</option>
							
						</select>
                    </div>
					 <div class="form-group">
                        <label for="exampleInputcourse">Department:</label>
						<select id="dept" name="dept" class="form-control" required="" onchange="displayCourse()"></select>
                    </div>
		
		   <div class="form-group">
           <label for="exampleInputEmail1">Password</label>
			<input type="password" name="password_1" class="form-control">
		</div>
		<div class="form-group">
			<label   >Confirm password</label>
			<input type="password" name="password_2" class="form-control">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-primary" name="register_btn2" style="background-color:#6b0d00;"> + Add user</button>
		</div>
	</form>



		  </div>
		</div>
        </div> <!-- end of container -->
    </div><!--     end of page warp -->