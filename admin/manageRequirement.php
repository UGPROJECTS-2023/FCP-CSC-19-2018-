<?php
include("../functions.php");
include("MainMenu.php");


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
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>Requirement To</th>
<th>Description</th>
<th>Added_By</th>
<th>Added_On</th>
</tr>
</thead>
<?php
$sql =mysqli_query($db,"select * from requirements");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['Office'];?></td>
    <td><?php echo $rows['Description']; ?></td>
    <td><?php echo $rows['AddedBy']?></td>
    <td><?php echo $rows['AddedOn'];?></td>
    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" href="#">
    <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-left my-auto">
            <center><span>All Rights Reserved @ FUD 2023<span></center>
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
            