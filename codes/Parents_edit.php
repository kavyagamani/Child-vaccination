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
                <h3><i class="fa fa-hand-pointer-o"></i> Parents Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>
<?php
include('../dbconnect/dbconnect.php');

$parent_id=$_REQUEST['parent_id'];
$sql="select * from parents where parent_id='$parent_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);



?>
<a href="Parents_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form name="formID" id="formID" method="post" action="Parents_update.php">
	<input type="hidden" value="<?php echo $row['parent_id'];?>" name="parent_id">

  <table width="534" height="475" border="0" align="center">
   
    <tr>
      <td>Select Hospital:</td>
      <td><select name="hospital_id" id="hospital_id">
          <option>Select parents</option>
          <?php
	  include('../dbconnect/dbconnect.php');

$sql1="select * from hospital";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{

?>
  <option value="<?php echo $row1['hospital_id'];?>"<?php if($row1['hospital_id']==$row['hospital_id']){ ?> selected <?php } ?>><?php echo $row1['hospital_name'];?></option>

<?php 
}
?>
      </select></td>
    </tr>
    <tr>
      <td width="254">Parents_Name:</td>
      <td width="264"><input type="text" name="parent_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['parent_name'];?>"></td>
    </tr>
    <tr>
      <td>Parent_Type:</td>
      <td><input name="p_type" type="radio" <?php if($row['p_type']=="father") { ?> checked  <?php } ?> value="father">father
      <input name="p_type" type="radio" <?php if($row['p_type']=="mother") { ?> checked  <?php } ?> value="Mother" >mother
      <input name="p_type" type="radio" value="Others/Guardians" <?php if($row['p_type']=="others") { ?> checked  <?php } ?> >others</td>
    </tr>
    <tr>
      <td>Phone_No:</td>
      <td><input type="number" name="phone_no" class="form-control validate[required,custom[mobile]]"value="<?php echo $row['phone_no'];?>"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" class="form-control validate[required,custom[email]]" value="<?php echo $row['email'];?>"></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="password" maxlength="6" class="form-control  validate[required]" value="<?php echo $row['password'];?>"></td>
    </tr>
    <tr> 
      <td>Retype_password:</td>
      <td><input type="password" name="repassword" id="repassword" maxlength="6" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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


