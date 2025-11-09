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
										<h1 class="main-title float-left"> Assign Designer Details</h1>
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
									<h3><i class="fa fa-table"></i> Assign Designer Details </h3>
									
								</div>
									
								<div class="card-body">
									<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
									<thead>
  <tr>
    <th>Sl no </th>
    <th>Request No </th>
	<th>Client Name </th>
	<th>Customer Name </th>
    <th>Design latest update </th>
    <th>Received date </th>
    <th>Assign status </th>
    <th>Design image </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
   <?php
  
  include('../dbconnector/db_connect.php');
  $sl=1;
   $sql="select * from assign_designer ad,design_request dr,client_details cd,designer_details dd where ad.designer_request_id=dr.design_request_id and dr.client_id=cd.client_id and ad.designer_id=dd.designer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['designer_request_id'];?></td>
	 <td>&nbsp;<?php echo $row['client_name'];?></td>
	  <td>&nbsp;<?php echo $row['designer_name'];?></td>
    <td>&nbsp;<?php echo $row['design_latest_update'];?></td>
    <td>&nbsp;<?php echo $row['received_date'];?></td>
    <td>&nbsp;<?php echo $row['assign_status'];?></td>
       <td>&nbsp;<a href="../uploads/<?php echo $row['design_image'];?>" class="btn btn-success">DOWNLOAD DESIGN</a></td>
      <td><a href="assign_designer_edit.php?assign_designer_id=<?php echo $row['assign_designer_id'];?>">Edit</a></td>
    <td><a href="assign_designer_delete.php?assign_designer_id=<?php echo $row['assign_designer_id'];?>">Delete</a></td>
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

