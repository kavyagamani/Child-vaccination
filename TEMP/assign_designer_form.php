<!DOCTYPE html>
<html lang="en">
<head>
		<?php include("metadata.php"); ?>
		<?php include('header.php'); ?>
		<?php include('sidebar.php'); ?>
</head>

<body class="adminbody">


	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->

	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">


			<div class="row">
					<div class="col-xl-12">
							<div class="breadcrumb-holder">
                                    <!-- <h1 class="main-title float-left">Form validation</h1>
                                    <ol class="breadcrumb float-right">
										<li class="breadcrumb-item">Home</li>
										<li class="breadcrumb-item active">Form validation</li>
                                    </ol> -->
                                    <div class="clearfix"></div>
                            </div>
					</div>
			</div>
            <!-- end row -->
			

			

			
			<div class="row">
			
                  <div class="col-xs-20 col-sm-20 col-md-10 col-lg-10 col-xl-10">					
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-hand-pointer-o"></i> Assign Designer  Details</h3>
								
							</div>
								
							<div class="card-body">
							<!----------------------------------------------->
<?php
include('val.php');
?>
<form id="formID" action="assign_designer_insert.php" method="post" name="form1">
  <table width="586" height="422" border="0" align="center">
   
    <tr>
      <td width="209">Designer request No / Customer Name </td>
      <td width="367"><select name="designer_request_id" id="designer_request_id" class="validate[required] form-control">
       
		<?php
		$design_request_id=$_REQUEST['design_request_id'];
		include('../dbconnector/db_connect.php');
		
		$sql="select * from design_request dr,client_details cd where dr.client_id=cd.client_id and dr.design_request_id='$design_request_id'";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<option value="<?php echo $row['design_request_id'];?>"><?php echo $row['design_request_id'];?> / <?php echo $row['client_name'];?></option>
		<?php
		}
		?>
		
      </select></td>
    </tr>
    <tr>
      <td>Designer Name </td>
      <td><select name="designer_id" id="designer_id" class="validate[required] form-control">
        <?php
		
		
		
		$sql="select * from designer_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['designer_id'];?>"><?php echo $row['designer_name'];?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Work Update To Designer </td>
      <td><textarea name="design_latest_update" class="validate[required] form-control" id="design_latest_update"></textarea></td>
    </tr>
    <tr>
      <td>Received Date </td>
      <td><input name="received_date" type="date" value="<?php echo date('Y-m-d'); ?>" readonly="" class="validate[required,custom[date]] form-control" id="received_date"></td>
    </tr>
    <tr>
      <td height="80" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </tr></div></td>
   
  </table>
</form>
						</div>														
						</div><!-- end card-->					
                    </div>

							</div>														
						</div><!-- end card-->					
                    </div>
					
					
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
<?php include('val.php'); ?>

</body>
</html>
