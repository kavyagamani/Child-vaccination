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
                    <h1 class="main-title float-left"> purchase Details</h1>
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
<a href="Purchase_information.php" class="btn btn-primary">ADD NEW</a>
<div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">           
              <div class="card mb-3">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> purchase Details </h3>
                  
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                      
  <tr>
    <th>sl no </th>
	<th>Vaccination Name</th>
    <th>BATCH NO </th>
    <th>DATE OF MANUFACTURE </th>
    <th>DATE OF EXPIRE </th>
    <th>AMOUNT</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
</thead>
<tbody>
 <?php


include('../dbconnect/dbconnect.php');
$sl=1;
$tot=0;
$sql="select * from purchase pu,vaccine_master mv where pu.v_id=mv.v_id";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

$tot=$tot+$row['amount'];
?> 
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
	<td>&nbsp;<?php echo $row['vname'];?></td>
    <td>&nbsp;<?php echo $row['batch_no'];?></td>
    <td>&nbsp;<?php echo $row['dmfg'];?></td>
    <td>&nbsp;<?php echo $row['dexp'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<a href="Purchase_edit.php?purchase_id=<?php echo $row['purchase_id'];?>">edit</a></td>
    <td><a href="Purchase_information_delete.php?purchase_id=<?php echo $row['purchase_id'];?>"onclick="return confirm('are u sure want to delete')">delete</a></td>
  </tr>
  <?php
}
?>
</tbody>
<tr>
    <th> </th>
  <th></th>
    <th> </th>
    <th> </th>
    <th><strong>Total Amount</strong></th>
    <th><?php echo $tot; ?></th>
    <th></th>
    <th></th>
  </tr>

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

  
  




