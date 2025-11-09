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
                    <h1 class="main-title float-left"> Hospital  Details</h1>
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
<a href="Hospital_form.php" class="btn btn-primary">ADD NEW</a>
<div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">           
              <div class="card mb-3">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> Hospital Details </h3>
                  
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover display">
                    <thead>
  <tr>
    <th>SL.NO</th>
    <th>HOSPITAL NAME </th>
    <th>ADDRESS</th>
    <th>PHONE NO </th>
    <th>EMAIL ID </th>
    <th>WEBSITE</th>
    <th>MAJOR FACILITIES </th>
    <th>EMERGENCY NO </th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
</thead>
<tbody>
<?php


include('../dbconnect/dbconnect.php');
$sl=1;
$sql="select * from hospital ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?> 
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['hospital_name'];?></td>
    <td>&nbsp;<?php echo $row['address'];?></td>
    <td>&nbsp;<?php echo $row['phone_no'];?></td>
    <td>&nbsp;<?php echo $row['email'];?></td>
    <td>&nbsp;<?php echo $row['website'];?></td>
    <td>&nbsp;<?php echo $row['majorfacilities'];?></td>
    <td>&nbsp;<?php echo $row['emergency_no'];?></td>
    <td>&nbsp;<a href="Hospital_edit.php?hospital_id=<?php echo $row['hospital_id'];?>">Edit</a></td>
    <td><a href="Hospital_delete.php?hospital_id=<?php echo $row['hospital_id'];?>"onclick="return confirm('are u sure want to delete')">delete</a></td>
  </tr>
  <?php
}
?>
</table>
</tbody>
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

