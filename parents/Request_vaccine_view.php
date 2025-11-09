<!DOCTYPE html>
<html lang="en">
<?php include('metadata.php'); ?>

<body class="adminbody">
    
<div id="main">

  <!-- top bar navigation -->
<?php include('header.php'); ?>
  <!-- End Navigation -->
  <?php include('sidebar.php'); ?>
  <!-- End Sidebar -->


    <div class="content-page">
  
    <!-- Start content -->
        <div class="content">
            
      <div class="container-fluid">

          
              
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left"> Request Vaccine Details</h1>
                    <!-- <ol class="breadcrumb float-right">
                      <li class="breadcrumb-item">Home</li>
                      <li class="breadcrumb-item active">Data Tables</li>
                    </ol> -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        


        
        
        <hr>
<div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">           
              <div class="card mb-3">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> Request vaccine Details </h3>
                  
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                      
  <tr>
    <th>SL.NO</th>
    <th>VACCINE NAME </th>
    <th>CHILD NAME </th>
    <th>REQUEST DATE </th>
    <th>REQUEST STATUS</th>
  </tr>
</thead>
<tboby>
 <?php


include('../dbconnect/dbconnect.php');
$sl=1;
$uname=$_SESSION['uname'];
$sql="select * from request_for_vaccine rf,child_info ci,vaccine_master vm,parents p where p.parent_id=ci.parent_id and rf.v_id=vm.v_id and rf.child_id=ci.child_id and p.email='$uname'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?> 
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    
    <td>&nbsp;<?php echo $row['vname'];?></td>
    <td>&nbsp;<?php echo $row['c_name'];?></td>
    <td>&nbsp;<?php echo $row['req_date'];?></td>
      <td><strong> <font <?php if($row['req_status']=='REQUEST') { ?> color="#FF0000" <?php } else { ?>  color="#009933" <?php } ?>
	><?php echo $row['req_status'];?></font></strong></td>
  </tr>
  <?php
}
?>
</tboby>
</table>
</div>
                  
                </div>                            
              </div><!-- end card-->          
            </div>
            


            </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
  <!-- END content-page -->
    
  <?php include('footer.php'); ?>

</div>
<!-- END main -->

<?php include('script.php'); ?>
</body>
</html>

