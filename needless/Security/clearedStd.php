<?php
include("../functions.php");
include("MainMenu.php");
if (isset($_GET['id'])) {
	$Code =$_GET['id'];
	$sql =mysqli_query($db,"DELETE FROM mainclearance WHERE id='$Code'");
	if ($sql) {
		echo "<script>alter('data deleted successfully');</script>"; 
	}
}

?>
<script>

function searchFunction(){
	var input, filter, table, tr, td, i, textValue;
	input = document.getElementById("mysearchkey");
	filter = input.value.toUpperCase();
	table = document.getElementById("table_id");
	tr = table.getElementsByTagName('tr');
	for(i=0; i<tr.length; i++){
		td = tr[i].getElementsByTagName("td")[2];
		if(td){
			textValue = td.textContent || td.innerText;
			if(textValue.toUpperCase().indexOf(filter) > -1){
				tr[i].style.display = "";
			}else{
				tr[i].style.display = "none";
			}
			
		}
	}
}
</script>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header"> List of Cleared Students </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Students Clearance Management 
</div>
             <!-- /.panel-heading -->
<div class="panel-body">
<div class="input-group custom-search-form">
        <input type="text" id="mysearchkey" class="form-control" placeholder="Search by registration number..." onkeyup="searchFunction();">
            <span class="input-group-btn">
            <button class="btn btn-primary" type="button" style="background:#6b0d00;">
                <i class="fa fa-search"></i>
            </button>
            </span>
</div>
<p></p><br/>
<div class="table-responsive">
<table class="table table-hover" id="table_id">
<thead>
<tr>
<th>S/No</th>
<th>Student Name</th>
<th>Registration No</th>
<th>Course</th>
<th>Faculty</th>
<th>Department</th>
<th>Cleared By</th>
</tr>
</thead>
<?php
$sql=mysqli_query($db,"SELECT * FROM mainclearance where SecurityStatus ='Accepted';");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody>
	<tr>
		<td><?php echo $count;?></td>
		<td><?php echo $rows['StudentName'];?></td>
		<td><?php echo $rows['RegNo']; ?></td>
		<td><?php echo $rows['Course'];?></td>
		<td><?php echo $rows['Faculty'];?></td>
		<td><?php echo $rows['Department'];?></td>
		<td><?php echo $rows['Security_Cleared_By'];?></td>
    </tr>
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<!-- <button onclick="window.Print()">print</button>
 -->
<a class="btn btn-default btn-lg btn-block" href="#">Copyright &copy; 2021 Bayero University, Kano </a>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                      
                   

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            