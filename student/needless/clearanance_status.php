<?php
include("../functions.php");
include("MainMenu.php");

 if(isset($_GET['id']))
{
    $id=intval($_GET['id']);
    $adn="delete from applicants where id=?";
        $stmt= $db->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();    
        if ($adn) {
   echo " <script>alert('Data Deleted');</script>"; 
} 
            
}
 ?>
?>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header">Students Clearance Status  </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Check Your Name 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>StudentName</th>
<th>Clearance Status</th>
<th>Comment/Reason</th>
<th>Cleared On</th>

</tr>
</thead>
<?php
$sql=mysqli_query($db,"SELECT *from clearance where  ClearanceStatus ='cleared';");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['StudentName'];?></td>
    <td><?php echo $rows['ClearanceStatus']; ?></td>
    <td><?php echo $rows['Comment_Reason']?></td>
    <td><?php echo $rows['Posting_Date'];?></td>
   

    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" href="#">Copyright &copy; 2020 Bayero University, Kano</a>
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
            