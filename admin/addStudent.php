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
	}
 }

 </script>
 <style>
 .form-control{
	 width:100%;
 }
 </style>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
                <ol class="breadcrumb">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Student</a></li>
                    <li class="active">Register Student</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Add New Student</div>
            <div class="panel-body">
                <div class="header">
                    <h2>Register Student</h2>
                </div>
                <form method="post" action="addStudent.php" enctype="multipart/form-data">

                    <?php echo display_error(); ?>
					<div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserName</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Registration No</label>
                        <input type="text" name="stdno" class="form-control">
                    </div>
					<div class="form-group">
                        <label for="exampleInputcourse">Faculty:</label>
                        <select id="faculty" name="faculty" class="form-control" onchange="displayDept()" required="">
							<option></option>
							
							<option value="Faculty of Computing">Faculty of Computing</option>
							
						</select>
                    </div>
					 <div class="form-group">
                        <label for="exampleInputcourse">Department:</label>
						<select id="dept" name="dept" class="form-control" required="" onchange="displayCourse()"></select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Course</label>
                        <input type="text" name="course" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emails</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Type</label>
                        <select name="user_type" id="user_type" class="form-control" readonly>
                        
                        <option value="student" selected>Student</option>
                        </select>
                    </div>
					 <div class="form-group">
                        <label for="exampleInputEmail1">Picture</label>
                         <input type="file" class="form-control" id="file" placeholder="picture" name="file" class="file-loading" style="width:auto;"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password_1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_2" class="form-control">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" name="register_btn" style="background-color:#6b0d00;"> + Register Student</button>
                    </div>
                </form>


            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->