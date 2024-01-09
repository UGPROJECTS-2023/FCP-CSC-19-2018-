<?php
include("../functions.php");
include("MainMenu.php");
$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM feedback WHERE id='$Code'");
  if ($sql) {
   echo "<script>alert('data deleted');</script>"; 
 }
 }
?>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header">Message Sent Center </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
 Clearance Status FeedBack  Management 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable" border="0">
<thead>
<tr>
<th>S/No</th>
<th>Message Body</th>
<th>Sent By </th>
<th>Department</th>
<th>Sent On</th>

</tr>
</thead>

<?php
$query= "SELECT * FROM feedback WHERE RegNo ='$useridentity'";
$sql=mysqli_query($db, $query);
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['Reason']; ?></td>
    <td><?php echo $rows['SentBy']?></td>
	<td><?php echo $rows['Department']?></td>
    <td><?php echo $rows['PostingDate'];?></td>
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
            