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
                <h3><i class="fa fa-hand-pointer-o"></i> Child Information  Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>

<?php

include('../dbconnect/dbconnect.php');

$child_id=$_REQUEST['child_id'];
$sql="select * from child_info where child_id='$child_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);



?>
<script type = "text/javascript">
 <!--
 function Redirect() {
 window.location = "child_view.php";
 }
 
 //-->
 </script>
<form name="formID" id="formID" method="post" action="child_update.php">
<input type = "button" value = "Redirect Me" onclick = "Redirect();" />
<input type="hidden" value="<?php echo $row['child_id'];?>" name="child_id">
  <table width="443" height="463" border="0" align="center">
    
      <td height="79"> Select Parent:</td>
      <td>
        <select name="parent_id" id="parent_id">
          <option>Select parents</option>
          <?php
	  
$sql1="select * from parents";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{

?>
                   <option value="<?php echo $row1['parent_id'];?>"<?php if($row1['parent_id']==$row['parent_id']){ ?> selected <?php } ?>><?php echo $row1['parent_id'];?></option>

          <?php 
}
?>
        </select>
      </td>
    </tr> 
    <tr>
      <td width="171" height="77">child_Name:</td>
      <td width="256"><input type="text" name="c_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['c_name'];?>"></td>
    </tr>
    <tr>
      <td height="68">Date_Of_Birth:</td>
      <td><input type="date" name="dob" class="form-control validate[required,custom[date]]" value="<?php echo $row['dob'];?>"></td>
    </tr>
    <tr>
      <td height="63">Gender:</td>
      <td><input name="gender" type="radio" <?php if($row['gender']=="male") { ?> checked  <?php } ?> value="male" >male
	  <input name="gender" type="radio" <?php if($row['gender']=="female") { ?> checked  <?php } ?> value="female" >female
      <input name="gender" type="radio" <?php if($row['gender']=="others") { ?> checked  <?php } ?> value="others" >others</td>
    </tr>
    <tr>
      <td height="74" colspan="2"align="center"><input type="submit" name="Submit" value="Submit"class="btn btn-primary">
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


