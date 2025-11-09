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
<a href="Purchase_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>

<form name="formID" id="formID" method="post" action="Purchase_information_insert.php">
<table width="472" height="402" border="0"align="center">
    
    <tr>
      <td height="51"> Select vaccine:</td>
      <td>        <select name="v_id" id="v_id" class="form-control">
		 <option>Select vaccine master</option>
	  <?php
	  include('../dbconnect/dbconnect.php');

$sql="select * from vaccine_master ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?>  
<option value="<?php echo $row['v_id'];?>"><?php echo $row['vname'];?></option>
<?php 
}
?>
        </select></td>
    </tr>
    <tr>
      <td width="225" height="52">Batch No:</td>
      <td width="231"><input type="text" name="batch_no" id="batch_no" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="54">Date of manufacture:</td>
      <td><input type="date" name="dmfg" id="dmfg" class="form-control validate[required,custom[date]] "></td>"></td>
    </tr>
    <tr>
      <td height="62">Date of expire:</td>
      <td><input type="date" name="dexp" id="dexp" class="form-control validate[required,custom[date]] "></td>
    </tr>
    <tr>
      <td height="61">Amount:</td>
      <td><input type="text" name="amount" id="amount" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="59" colspan="2"align="center"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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

