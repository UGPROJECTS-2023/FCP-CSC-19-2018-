<?php
include("../functions.php");
include("MainMenu.php");
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM applicants
    WHERE id='$Code'");

 }


?>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header">Applied Students</h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Applied Students
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="table_id" >
<thead>
<tr>
<th>S/No</th>
<th>Student Name</th>
<th>Registration No</th>
<th>Course</th>
<th>Faculty</th>
<th>Department</th>
</tr>
</thead>
<?php
$sql =mysqli_query($db,"select * from applicants");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['StudentName'];?></td>
    <td><?php echo $rows['RegNo']; ?></td>
    <td><?php echo $rows['Course'];?></td>
    <td><?php echo $rows['Faculty'];?></td>
    <td><?php echo $rows['Department'];?></td>
</td>
    </tr>
 </tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" href="#">
    <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-left my-auto">
            <center><span>All Rights Reserved @ FUD 2024</span></center>
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
            </div>
            <!-- /#page-wrapper -->



            <!-- mega account -->
            <!-- prqyH_V7lEHIEcpEa8BsrA -->