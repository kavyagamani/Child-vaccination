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
				  <table border="0" class="table table-bordered table-hover display">
				  <tr>
				  <td><form action="Vaccination_schedule_view_next.php" method="post">
				  Select Cild Name : 
				    <select name="c_id" id="c_id" >
                      <option>Select child_info</option>
                      <?php
	  include('../dbconnect/dbconnect.php');

$sql1="select * from child_info";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{

?>
                      <option value="<?php echo $row1['child_id'];?>"><?php echo $row1['c_name'];?></option>
                      <?php 
}
?>
                    </select>
					<input type="submit" name="b1" value="SEARCH" class="btn btn-primary">
				  </form>
                </td>
				  <td><form action="Vaccination_schedule_view_next2.php" method="post">
				  Select Status : 
				    <select name="status" id="status" >
                      <option>Select STATUS</option>
					  <option>PENDING</option>
					  <option>VACCINATED</option>
                     
                    </select>
					<input type="submit" name="b1" value="SEARCH" class="btn btn-primary">
				  </form>
                </td>
				  </tr>
				  </table>
				  <table id="example1" class="table table-bordered table-hover display">
                      
                        <thead>

                        <tr>

  
    <th>SL.NO</th>
   
	<th>CHILD NAME </th>
	<th>DATE OF BIRTH </th>
	 <th>PARENT NAME </th>
    <th>DOCTOR NAME </th>
    <th>VACCINE NAME </th>
	<th>VACCINE DURATION </th>
	<th>VACCINE DATE </th>
	<th>REMAINING DAYS </th>
	<th>transaction</th>
    <th>VACCINE STATUS </th>
    <th>DELETE</td>
  </tr>
</thead>
<tbody>
  <?php

include('../dbconnect/dbconnect.php');
$sl=1;
$status=$_POST['status'];
$sql="select * from vaccination_schedule vs,child_info ci,doctor d,vaccine_master vm,parents p where vs.child_id=ci.child_id and vs.doctor_id=d.doctor_id and vs.v_id=vm.v_id and p.parent_id=ci.parent_id and vs.s_status='$status'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

$vdate = date('Y-m-d', strtotime($row['dob']. ' + '.$row['duration_of_vaccine'].' days'));

$earlier = new DateTime(date('Y-m-d'));
$later = new DateTime($vdate);

$rdays = $earlier->diff($later)->format("%r%a"); 
?> 
  <tr>
    <td><?php echo $sl++;?></td>
   
    <td><?php echo $row['c_name'];?></td>
	<td><?php echo $row['dob'];?></td>
	 <td><?php echo $row['parent_name'];?></td> 
    <td><?php echo $row['doctor_name'];?></td>
    <td><?php echo $row['vname'];?></td>
	 <td><?php echo $row['duration_of_vaccine'];?>&nbsp;<?php echo $row['duration_type'];?></td>
  	<td><?php echo  $vdate; ?></td>
	<td><?php echo $rdays;?></td>
	<td><?php echo $row['transaction'];?></td>
	<td><div <?php if($row['s_status']=="PENDING") { ?> class="btn btn-danger" <?php } ?>
	<?php if($row['s_status']=="VACCINATED") { ?> class="btn btn-success" <?php } ?>
	 ><?php echo $row['s_status'];?></div></td>
  <td><a href="Vaccination_schedule_delete.php?vaccination_schedule_id=<?php echo $row['vaccination_schedule_id'];?>"onclick="return confirm('are u sure want to delete')" class="btn btn-primary">Delete</a></td>
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

  
  

