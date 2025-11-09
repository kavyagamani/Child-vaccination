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
                <h3><i class="fa fa-hand-pointer-o"></i> Request Information  Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>
<?php


include('../dbconnect/dbconnect.php');

$request_vaccine_id=$_REQUEST['request_vaccine_id'];
$sql="select * from request_for_vaccine where request_vaccine_id='$request_vaccine_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<a href="Request_vaccine_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>

<form name="formID" id="formID" method="post" action="Request_vaccine_update.php">
	<input type="hidden" value="<?php echo $row['request_vaccine_id'];?>" name="request_vaccine_id">

  <table width="483" height="431" border="0" align="center">
    
    <tr>
      <td width="202" height="55">select Vaccine:</td>
      <td width="265"><select name="v_id" id="v_id">
          <option>Select vaccine_master</option>
          <?php

$sql1="select * from vaccine_master";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{

?>
                   <option value="<?php echo $row1['v_id'];?>"<?php if($row1['v_id']==$row['v_id']){ ?> selected <?php } ?>><?php echo $row1['vname'];?></option>
          <?php 
}
?>
        </select>
      </td>
    </tr>
    <tr>
      <td height="52">select Child:</td>
      <td><select name="c_id" id="c_id">
          <option>Select child_info</option>
          <?php
	  
$sql2="select * from child_info";
$res2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($res2))
{

?>
                   <option value="<?php echo $row2['child_id'];?>"<?php if($row2['child_id']==$row2['child_id']){ ?> selected <?php } ?>><?php echo $row2['c_name'];?></option>


          <?php 
}
?>
        </select>
      </td>
    </tr>
    <tr>
      <td height="55">Request_date:</td>
      <td><input type="date" name="req_date" id="req_date" class="form-control validate[required,custom[date]]" value="<?php echo $row['req_date'];?>"></td>
    </tr>
    <tr>
      <td height="143">Request_status:</td>
      <td><textarea name="req_status"  id="req_status" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['req_status'];?>"></textarea></td>
    </tr>
    <tr>
      <td height="60" colspan="2" align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="Reset" name="Reset" value="Reset"class="btn btn-danger"></td>
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





