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
                    <h1 class="main-title float-left"> Vaccination Schedule Details</h1>
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
<a href="Vaccination_schedule.php" class="btn btn-primary">ADD NEW</a>
<div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">           
              <div class="card mb-3">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> Vaccination Schedule Details </h3>
                  
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover display">
                      
                        <thead>

                        <tr>

  
    <th>SL.NO</th>
    <th>CHILD ID </th>
    <th>DOCTOR ID </th>
    <th>VACCINE ID </th>
	<th>transaction</th>
    <th>DATE OF VACCINE </th>
    <th>EDIT</th>
    <th>DELETE</td>
  </tr>
</thead>
<tbody>
  <?php

include('../dbconnect/dbconnect.php');
$sl=1;
$sql="select * from vaccination_schedule vs,child_info ci,doctor d,vaccine_master vm where vs.child_id=ci.child_id and vs.doctor_id=d.doctor_id and vs.v_id=vm.v_id";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?> 
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    
    <td>&nbsp;<?php echo $row['c_name'];?></td>
    <td>&nbsp;<?php echo $row['doctor_name'];?></td>
    <td>&nbsp;<?php echo $row['vname'];?></td>
  	<td>&nbsp;<?php echo $row['transaction'];?></td>
	  <td>&nbsp;<?php echo $row['date_of_vaccine'];?></td>
    <td>&nbsp;<a href="Vaccination_schedule_edit.php?vaccination_schedule_id=<?php echo $row['vaccination_schedule_id'];?>">edit</a></td>
    <td><a href="Vaccination_schedule_delete.php?vaccination_schedule_id=<?php echo $row['vaccination_schedule_id'];?>"onclick="return confirm('are u sure want to delete')">delete</a></td>
  </tr>
  <?php
}
?>
</tbody>
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

  
  

