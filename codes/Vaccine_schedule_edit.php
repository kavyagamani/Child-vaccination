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
                <h3><i class="fa fa-hand-pointer-o"></i>Vaccine Schedule  Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>

<?php
include('../dbconnect/dbconnect.php');

$vschedule_id=$_REQUEST['vschedule_id'];
$sql="select * from v_schedule where vschedule_id='$vschedule_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<a href="Vaccine_schedule_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form name="formID" id="formID" method="post" action="Vaccine_schedule_update.php">
			<input type="hidden" value="<?php echo $row['vschedule_id'];?>" name="vschedule_id">


  <table width="544" height="472" border="0" align="center">
    
    <tr>
      <td height="60">vaccine_Id:</td>
      <td>
        <select name="v_id" id="v_id">
          <option>Select vaccine_master</option>
          <?php
	  include('../dbconnect/dbconnect.php');

$sql1="select * from vaccine_master ";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{

?>
           <option value="<?php echo $row1['v_id'];?>"<?php if($row1['v_id']==$row['v_id']){ ?> selected <?php } ?>><?php echo $row1['vname'];?></option>

          <?php 
}
?>
      </select></td>
    </tr>
    <tr>
      <td width="242" height="62">Duration_Of_Vaccine:</td>
      <td width="286"><input type="date" name="duration_of_vaccine" id="duration_of_vaccine" class="form-control validate[required,custom[date]]" value="<?php echo $row['duration _of_vaccine'];?>"></td>
    </tr>
    <tr>
      <td height="135">Description:</td>
      <td><textarea name="description" id="description"class="form-control validate[required]"><?php echo $row['v_description'];?></textarea></td>
    </tr>
    <tr>
      <td height="66" colspan="2" align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="Reset" name="Reset" value="Reset"class="btn btn-danger"></td>
    </tr>
  </table>
</form> </div>                            
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


