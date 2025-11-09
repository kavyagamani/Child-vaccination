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
                <h3><i class="fa fa-hand-pointer-o"></i> Vaccination schedule Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>

<?php
include('../dbconnect/dbconnect.php');

$vaccination_schedule_id=$_REQUEST['vaccination_schedule_id'];
$sql="select * from vaccination_schedule where vaccination_schedule_id='$vaccination_schedule_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);



?>
<a href="Vaccination_schedule_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form name="formID" id="formID" method="post" action="vaccination_schedule_update.php">
		<input type="hidden" value="<?php echo $row['vaccination_schedule_id'];?>" name="vaccination_schedule_id">

  <table width="453" height="403" border="0" align="center">
    <tr>
      <td height="54" colspan="2" align="center">vaccination schedule Information </td>
    </tr>
    <tr>
      <td width="189" height="53">Select Child:</td>
      <td width="248">
        <select name="c_id" id="c_id">
          <option>Select child_info</option>
          <?php
	 

$sql1="select * from child_info";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{

?>
           <option value="<?php echo $row1['child_id'];?>"<?php if($row1['child_id']==$row['child_id']){ ?> selected <?php } ?>><?php echo $row1['c_name'];?></option>

          <?php 
}
?>
        </select>
      </td>
    </tr>
    <tr>
      <td height="51"> Select Doctor:</td>
      <td>
        <select name="d_id" id="d_id">
          <option>Select doctor</option>
          <?php
	  include('../dbconnect/dbconnect.php');

$sql2="select * from doctor";
$res2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($res2))
{

?>
           <option value="<?php echo $row2['doctor_id'];?>"<?php if($row2['doctor_id']==$row['doctor_id']){ ?> selected <?php } ?>><?php echo $row2['doctor_name'];?></option>

          <?php 
}
?>
      </select></td>
    </tr>
    <tr>
      <td height="57">Select Vaccine:</td>
      <td><select name="v_id" id="v_id">
          <option>Select vaccine_master</option>
          <?php
	  
$sql3="select * from vaccine_master";
$res3=mysqli_query($conn,$sql3);
while($row3=mysqli_fetch_array($res3))
{

?>
           <option value="<?php echo $row3['v_id'];?>"<?php if($row3['v_id']==$row['v_id']){ ?> selected <?php } ?>><?php echo $row3['vname'];?></option>

          <?php 
}
?>
      </select></td>
    </tr>
    <tr>
      <td height="50">transaction</td>
      <td><input type="text" name="transaction" id="transaction" class="form-control validate[required]" value="<?php echo $row['transaction'];?><?php echo $row['transaction'];?>"></td>
    </tr>
    <tr>
      <td height="65">Date_of_vaccine</td>
      <td><input type="date" name="dob" id="dob" class="form-control validate[required,custom[date]]"value="<?php echo $row['date_of_vaccine'];?>"></td>
    </tr>
    <tr>
      <td height="55" colspan="2" align="center"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="Reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
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




