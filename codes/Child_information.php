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
<script type = "text/javascript">
 <!--
 function Redirect() {
 window.location = "child_view.php";
 }
 
 //-->
 </script>
<form name="formID" id="formID" method="post" action="Child_information_insert.php">
  <input type = "button" value = "Redirect Me" onclick = "Redirect();" />
  <table width="443" height="463" border="0" align="center">
    
    <tr>
      <td width="171" height="79"> Select Parent:</td>
      <td width="256">        <select name="parent_id" id="parent_id" class="form-control">
      <option>Select parents</option>
	  <?php
	  include('../dbconnect/dbconnect.php');

$sql="select * from parents";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?>  
<option value="<?php echo $row['parent_id'];?>"><?php echo $row['parent_name'];?></option>
<?php 
}
?>
</select>  
      </select></td>
    </tr>
    <tr>
      <td height="77">Child Name:</td>
      <td><input type="text" name="c_name"  id="c_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="68">Date Of Birth:</td>
      <td><input type="date" name="dob" id="dob" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td height="63">Gender:</td>
      <td><input name="gender" type="radio" value="male">male
	  <input name="gender" type="radio" value="female">female
      <input name="gender" type="radio" value="others">others</td>
    </tr>
    <tr>
      <td height="74" colspan="2"align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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
