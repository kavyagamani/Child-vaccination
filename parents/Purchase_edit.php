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
                <h3><i class="fa fa-hand-pointer-o"></i> Purchase Information Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>

<?php

include('../dbconnect/dbconnect.php');

$purchase_id=$_REQUEST['purchase_id'];
$sql="select * from purchase where purchase_id='$purchase_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);



?>

<a href="Purchase_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form name="formID"  id="formID" method="post" action="Purchase_update.php">
<input type="hidden" value="<?php echo $row['purchase_id'];?>" name="purchase_id">
<table width="472" height="402" border="0"align="center">
    
    <tr>
      <td height="51"> Select vaccine:</td>
      <td><select name="v_id" id="v_id">
          <option>Select vaccine_master</option>
          <?php

$sql="select * from vaccine_master ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?>
                   <option value="<?php echo $row['v_id'];?>"<?php if($row['v_id']==$row['v_id']){ ?> selected <?php } ?>><?php echo $row['vname'];?></option>

          <?php 
}
?>
      </select></td>
    </tr>
    <tr>
      <td width="225" height="52">Batch_No:</td>
      <td width="231"><input type="text" name="batch_no" class="form-control validate[required]" value="<?php echo $row['batch_no'];?>"></td>
    </tr>
    <tr>
      <td height="54">Date_of_manufacture:</td>
      <td><input type="date" name="dmfg"  class="form-control validate[required,custom[date]]"
        value="<?php echo $row['dmfg'];?>"></td>
    </tr>
    <tr>
      <td height="62">Date_of_expire:</td>
      <td><input type="date" name="dexp" class="form-control validate[required,custom[date]]" value="<?php echo $row['dexp'];?>"></td>
    </tr>
    <tr> 
      <td height="61">Amount:</td>
      <td><input type="text" name="amount" class="form-control validate[required,custom[onlyNumber]]"name="<?php echo $row['amount'];?>"></td>
    </tr>
    <tr>
      <td height="59" colspan="2"align="center"><input type="submit" name="Submit" value="Submit"class="btn btn-primary">
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


