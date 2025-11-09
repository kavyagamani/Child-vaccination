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
                    <h1 class="main-title float-left"> Vaccine Master Details</h1>
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
                  <h3><i class="fa fa-table"></i> Vaccine Master Details </h3>
                  
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover display">
                      
                        <thead>
                          <tr>
    <th>SL.NO</th>
    <th>VACCINE NAME </th>
   	<th>DURATION</th>
    <th>STOCK</th>
    <th>IMAGE</th>
    <th>DESCRIPTION</th>
  </tr>
</thead>
  <tbody>
 <?php


include('../dbconnect/dbconnect.php');
$sl=1;
$sql="select * from vaccine_master ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?> 
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['vname'];?></td>
	<td>&nbsp;<?php echo $row['duration_of_vaccine'];?>&nbsp;<?php echo $row['duration_type'];?></td>
	
	<td>&nbsp;<?php echo $row['stock'];?></td>
    <td>&nbsp;<img src="../photos/<?php echo $row['image'];?>" width="200" height="120"></td>
    <td>&nbsp;<?php echo $row['description'];?></td>
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
