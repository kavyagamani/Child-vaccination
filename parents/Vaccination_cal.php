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
<div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">           
              <div class="card mb-3">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> Vaccination Schedule Details </h3>
                  
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="" class="table table-bordered table-hover display">
                      
                        <thead>

                        <tr>

  
    <th>SL.NO</th>
    <th>DATE OF BIRTH </th>
	<th>VACCINE NAME </th>
	<th>VACCINE DURATION </th>
	<th>VACCINE DATE </th>
	<th>REMAINING DAYS </th>
    <th>REQUEST NOW</td>
     </tr>
</thead>
<tbody>
  <?php

include('../dbconnect/dbconnect.php');
$sl=1;
$child_id=$_REQUEST['child_id'];

$sql="select * from child_info ci,vaccine_master vm,parents p where p.parent_id=ci.parent_id and ci.child_id='$child_id'  ORDER BY  vm.duration_of_vaccine  asc";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

$vdate = date('Y-m-d', strtotime($row['dob']. ' + '.$row['duration_of_vaccine'].' days'));

$earlier = new DateTime(date('Y-m-d'));
$later = new DateTime($vdate);

$rdays = $earlier->diff($later)->format("%r%a"); 
$vid=$row['v_id'];
?> 
  <tr>
    <td><?php echo $sl++;?></td>
   
	<td><?php echo date("d-m-Y",strtotime($row['dob']));?></td>
    <td><?php echo $row['vname'];?></td>
	 <td><?php echo $row['duration_of_vaccine'];?>&nbsp;<?php echo $row['duration_type'];?></td>
  	<td><?php echo  date("d-m-Y",strtotime($vdate)); ?></td>
	<td><?php echo $rdays;?></td>


<?php
$sql2="select * from request_for_vaccine where  child_id='$child_id' and v_id='$vid'";
$res2=mysqli_query($conn,$sql2);
if(!$row2=mysqli_fetch_array($res2))
{	
?>
  <td><a href="Request_vaccine_information_insert.php?vid=<?php echo $row['v_id'];?>&child_id=<?php echo $row['child_id'];?>" class="btn btn-primary">Request Now</a></td>
  <?php
  }
  else
  {
  ?>
  <td><?php echo $row2['req_status'];?></td>
  <?php
  }
  ?>
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

  
  

