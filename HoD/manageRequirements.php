<?php
include("../functions.php");
include("MainMenu.php");

$HoDDepartment=$_SESSION['department'];
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM requirements
    WHERE id='$Code'");
  if ($sql) {
   echo "<script>alert('data deleted');</script>"; 
 }
 }
?>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header">Requirement for Clearance </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Requirements Management 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable" border="1">
<thead>
<tr>
<th>S/No</th>
<th>Student Category</th>
<th>Description</th>
<th>Added_By</th>
<th>Added_On</th>
<th>Action</th>
</tr>
</thead>
<?php
$sql=mysqli_query($db,"SELECT * FROM requirements;");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['StudentCategory'];?></td>
    <td><?php echo $rows['Description']; ?></td>
    <td><?php echo $rows['AddedBy']?></td>
    <td><?php echo $rows['AddedOn'];?></td>
    <td>
<a href="manageRequirements.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo Delete')" <i class="fa fa-trash">Delete</i></a>



    </td>

    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" href="#">Copyright &copy; 2024 Federal University, Dutse</a>
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
            