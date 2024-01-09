<?php
include("../functions.php");
include("MainMenu.php");
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM users  WHERE id='$Code'");
  if ($sql) {
   echo "<script>alert('data deleted');</script>"; 
 }
 }


?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Registered Students</h1>
		</div>
		</div>
                    <!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">
			  Registered Students
			</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>Full Name</th>
<th>Registration Number</th>
<th>Faculty</th>
<th>Department</th>
<!--<th>Actions</th> -->
</tr>
</thead>
<?php
$sql =mysqli_query($db,"select *from users where UserType='student' or UserType='user'");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody>
	<tr>
		<td><?php echo $count;?></td>
		<td><?php echo $rows['name'];?></td>
		<td><?php echo $rows['studentNo'];?></td>
		<td><?php echo $rows['Faculty'];?></td>
		<td><?php echo $rows['Department'];?></td>
		
		<!--<td>
			<a href="registerdStudents.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo Delete')" <i class="fa fa-trash"> Delete</i></a>
		</td>-->
    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" href="#">
    <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-left my-auto">
            <center><span>All Rights Reserved @ BUK 2020</span></center>
          </div>
        </div>
    </footer>
 </a>
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
            <!-- /#page-wrapper -->
            